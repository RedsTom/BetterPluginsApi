package fr.redstom.betterpluginsapi.commands;

import fr.redstom.betterpluginsapi.commands.exceptions.CommandException;
import org.bukkit.ChatColor;
import org.bukkit.command.Command;
import org.bukkit.command.CommandExecutor;
import org.bukkit.command.CommandSender;

public abstract class BetterCommandExecutor implements CommandExecutor {

    /**
     * Prefix of the command
     */
    private final String prefix;

    /**
     * Name of the command (for the syntax)
     */
    private final String commandName;

    /**
     * Permission of the command
     */
    private final String permission;


    /**
     * Constructor of the class ; it asks the permission of the commands
     *
     * @param prefix      Prefix of the command for the {@link BetterCommandExecutor#sendMessage(CommandSender, String)}
     * @param commandName Name of the command for the {@link BetterCommandExecutor#sendBadCommandUsage(CommandSender)}
     * @param permission  Permission of the command
     */
    public BetterCommandExecutor(String prefix, String commandName, String permission) {
        this.prefix = prefix;
        this.commandName = commandName;
        this.permission = permission;
    }

    /**
     * Executed when the command is run
     *
     * @param sender Sender of the command
     * @param args   Arguments of the command
     * @return The good usage of the command when TRUE is not good and FALSE is good.
     * @throws CommandException Error while command executing. Sent to the player and not the console
     */
    public abstract boolean run(CommandSender sender, String[] args) throws CommandException;

    @Override
    public boolean onCommand(CommandSender sender, Command command, String label, String[] args) {
        if (!(sender.hasPermission(permission))) {
            sendNoPermission(sender);
        } else {
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

    protected void sendNoPermission(CommandSender sender) {
        sendMessage(sender, "&cSorry, but you don't have permission to perform this command !");
    }

    /**
     * Send a message to a {@link CommandSender}
     *
     * @param sender  CommandSender to send the message
     * @param message Message to send
     */
    public void sendMessage(CommandSender sender, String message) {
        sender.sendMessage(ChatColor.translateAlternateColorCodes('&', prefix + "&8 » &r" + message));
    }

    /**
     * Send the bad command usage to the sender | To define
     *
     * @param sender Sender to send the command usage
     */
    protected abstract void sendBadCommandUsage(CommandSender sender);

    public String getCommandName() {
        return commandName;
    }

    public String getPermission() {
        return permission;
    }

    public String getPrefix() {
        return prefix;
    }
}
