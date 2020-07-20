package fr.redstom.betterpluginsapi.craft.ingredient.shaped;

import fr.redstom.betterpluginsapi.craft.ingredient.Ingredient;
import org.bukkit.inventory.ItemStack;

public class ShapedIngredient extends Ingredient {

    private char letter;

    public ShapedIngredient(ItemStack ingredient, char letter) {
        super(ingredient);
        this.letter = letter;
    }

    public char getLetter() {
        return letter;
    }

    public void setLetter(char letter) {
        this.letter = letter;
    }
}
