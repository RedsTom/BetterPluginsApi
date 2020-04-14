package fr.redstom.betterpluginsapi.commands.exceptions;

public class CommandException extends Exception {

    /**
     * Message of the exception
     */
    private final String message;

    /**
     * Public constructor to create a messaged exception in a command
     *
     * @param message Message will be shown when the exception is thrown
     */
    public CommandException(String message) {
        this.message = message;
    }

    /**
     * Get the message of the exception
     *
     * @return the message of the exception
     */
    @Override
    public String getMessage() {
        return message;
    }
}
