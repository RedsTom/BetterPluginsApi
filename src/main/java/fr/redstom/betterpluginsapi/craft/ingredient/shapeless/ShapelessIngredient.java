package fr.redstom.betterpluginsapi.craft.ingredient.shapeless;

import fr.redstom.betterpluginsapi.craft.ingredient.Ingredient;
import org.bukkit.inventory.ItemStack;

public class ShapelessIngredient extends Ingredient {

    private int count;

    public ShapelessIngredient(ItemStack ingredient, int count) {
        super(ingredient);
        this.count = count;
    }

    public int getCount() {
        return count;
    }

    public void setCount(int count) {
        this.count = count;
    }
}
