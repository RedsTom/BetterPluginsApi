package fr.redstom.betterpluginsapi.craft.ingredient;

import org.bukkit.inventory.ItemStack;

public abstract class Ingredient {

    private ItemStack ingredient;

    public Ingredient(ItemStack ingredient) {
        this.ingredient = ingredient;
    }

    public ItemStack getIngredient() {
        return ingredient;
    }

    public void setIngredient(ItemStack ingredient) {
        this.ingredient = ingredient;
    }
}
