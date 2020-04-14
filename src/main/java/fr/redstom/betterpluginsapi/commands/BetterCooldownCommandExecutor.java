package fr.redstom.betterpluginsapi.commands;

import com.google.common.collect.Maps;
import fr.redstom.betterpluginsapi.commands.exceptions.CommandException;
import org.bukkit.command.Command;
import org.bukkit.command.CommandSender;
import org.bukkit.entity.Player;

import java.time.ZonedDateTime;
import java.util.Map;
import java.util.UUID;

public abstract class BetterCooldownCommandExecutor extends BetterCommandExecutor {

    private final Map<UUID, Long> cooldowns = Maps.newHashMap();
    private final long cooldownInSeconds;
    private final String permission;
    private final String bypassPermission;

    public BetterCooldownCommandExecutor(String name, String cmd, String permissions, long cooldownInSeconds, String bypassPermission) {
        super(name, cmd, permissions);
        this.cooldownInSeconds = cooldownInSeconds + 1;
        this.permission = permissions;
        this.bypassPermission = bypassPermission;
    }

    @Override
    public boolean onCommand(CommandSender sender, Command command, String s, String[] args) {

        if (!(sender.hasPermission(permission))) {
            sendNoPermission(sender);
            return false;
        }

        if (!(sender instanceof Player)) {
            try {
                if (run(sender, args)) {
                    sendBadCommandUsage(sender);
                }
            } catch (CommandException e) {
                sendMessage(sender, "&c" + e.getMessage());
            }
            return false;
        }

        if (sender.hasPermission(bypassPermission)) {
            try {
                if (run(sender, args)) {
                    sendBadCommandUsage(sender);
                }
            } catch (CommandException e) {
                sendMessage(sender, "&c" + e.getMessage());
            }
            return false;
        }

        Player player = (Player) sender;
        if (cooldowns.get(player.getUniqueId()) == null) {
            setCooldown(player);
            try {
                if (run(sender, args)) {
                    sendBadCommandUsage(sender);
                }
            } catch (CommandException e) {
                sendMessage(sender, "&c" + e.getMessage());
            }
            return false;
        }

        if (ZonedDateTime.now().toInstant().getEpochSecond() < cooldowns.get(player.getUniqueId())) {
            sendCooldownNotPassedMessage(player);
        } else {
            setCooldown(player);
            try {
                if (run(sender, args)) {
                    sendBadCommandUsage(sender);
                }
            } catch (CommandException e) {
                sendMessage(sender, "&c" + e.getMessage());
            }
        }

        return false;
    }

    protected abstract void sendCooldownNotPassedMessage(Player player);

    protected void setCooldown(Player player) {
        long zoneDateTime = ZonedDateTime.now().toInstant().getEpochSecond();
        cooldowns.put(player.getUniqueId(), (zoneDateTime + cooldownInSeconds));
    }

    protected void resetCooldown(Player player) {
        cooldowns.put(player.getUniqueId(), null);
    }

    protected long getCooldown(Player player) {
        return cooldowns.getOrDefault(player.getUniqueId(), 0L) - ZonedDateTime.now().toInstant().getEpochSecond();
    }
}
