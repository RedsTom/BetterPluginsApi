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
    private String prefix;

    /**
     * Name of the command (for the syntax)
     */
    private String commandName;

    /**
     * Permission of the command
     */
    private String permission;


    /**
     * Constructor of the class ; it asks the permission of the commands
     *
     * @param permission Permission of the command
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
     */
    public abstract boolean run(CommandSender sender, String[] args) throws CommandException;

    @Override
    public boolean onCommand(CommandSender sender, Command command, String label, String[] args) {
        if (!(sender.hasPermission(permission))) {
            sendMessage(sender, "&cSorry, but you don't have permission to perform this command !");
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

    /**
     * Send a message to a {@link CommandSender}
     *
     * @param sender  CommandSender to send the message
     * @param message Message to send
     */
    public void sendMessage(CommandSender sender, String message) {
        sender.sendMessage(ChatColor.translateAlternateColorCodes('&', prefix + "&8 » &r" + message));
    }

    protected abstract void sendBadCommandUsage(CommandSender sender);
}
