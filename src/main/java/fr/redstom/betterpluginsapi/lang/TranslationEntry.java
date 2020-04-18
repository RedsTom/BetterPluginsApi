package fr.redstom.betterpluginsapi.lang;

import org.bukkit.ChatColor;

import java.io.FileNotFoundException;
import java.io.IOException;
import java.io.InputStream;
import java.util.Properties;

public class TranslationEntry {

    private final Properties properties;
    private final String locale;
    private final InputStream stream;

    /**
     * Create a {@link TranslationEntry} from the class
     *
     * @param locale     Locale to load the translations
     * @param properties Properties file to load the translations
     * @param stream     Stream to read the files
     */
    private TranslationEntry(String locale, Properties properties, InputStream stream) {
        this.locale = locale;
        this.properties = properties;
        this.stream = stream;
    }

    /**
     * Factory method : Load the {@link TranslationEntry} with the locale only
     *
     * @param locale Locale to load the translations
     * @return The {@link TranslationEntry} loaded with the locale
     * @throws IOException Exception in the case of the language doesn't have a file
     */
    public static TranslationEntry load(String locale) throws IOException {
        Properties properties = new Properties();
        String propFileName = "/lang/" + locale + ".lang";
        InputStream stream = TranslationEntry.class.getResourceAsStream(propFileName);

        if (stream == null && !(locale.equals("en_us"))) {
            return TranslationEntry.load("en_us");
        } else if (stream == null) {
            throw new FileNotFoundException("The file " + propFileName + " cannot be found !");
        } else {
            properties.load(stream);
        }
        return new TranslationEntry(locale, properties, stream);
    }

    /**
     * Return the message in the file corresponding to the class's lang
     *
     * @param messageKey Key of the message to get
     * @return The message corresponding to the key
     */
    public String getTranslation(String messageKey) {

        String result;
        result = properties.getProperty(messageKey, "NOT FOUND");
        return ChatColor.translateAlternateColorCodes('&', result);

    }

    /**
     * Close the input stream
     *
     * @throws IOException Exception in the case of the {@link InputStream#close()} throws an exception
     */
    public void close() throws IOException {
        stream.close();
    }
}
