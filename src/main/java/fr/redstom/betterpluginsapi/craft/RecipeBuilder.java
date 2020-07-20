package fr.redstom.betterpluginsapi.craft;

import fr.redstom.betterpluginsapi.craft.ingredient.shaped.CraftShape;
import fr.redstom.betterpluginsapi.craft.ingredient.shapeless.ShapelessIngredient;
import fr.redstom.betterpluginsapi.plugin.BetterPlugin;
import org.bukkit.Bukkit;
import org.bukkit.NamespacedKey;
import org.bukkit.inventory.ItemStack;
import org.bukkit.inventory.ShapedRecipe;
import org.bukkit.inventory.ShapelessRecipe;

import java.util.ArrayList;
import java.util.List;

public class RecipeBuilder {

    public static final List<NamespacedKey> KEYS = new ArrayList<>();

    public static class ShapedRecipeBuilder {

        private final ShapedRecipe recipe;

        public ShapedRecipeBuilder(BetterPlugin plugin, String name, ItemStack result) {
            recipe = new ShapedRecipe(new NamespacedKey(plugin, name), result);
        }

        public ShapedRecipeBuilder setShape(CraftShape shape) {
            recipe.shape(shape.getShape());
            shape.getIngredients().forEach((letter, itemStack) -> {
                if (itemStack.getData() != null) {
                    recipe.setIngredient(letter, itemStack.getData());
                } else {
                    recipe.setIngredient(letter, itemStack.getType());
                }
            });
            return this;
        }

        public void build() {
            Bukkit.addRecipe(recipe);
            KEYS.add(recipe.getKey());
        }
    }

    public static class ShapelessRecipeBuilder {

        private final ShapelessRecipe recipe;

        public ShapelessRecipeBuilder(BetterPlugin plugin, String name, ItemStack result, ShapelessIngredient... ingredients) {
            this.recipe = new ShapelessRecipe(new NamespacedKey(plugin, name), result);
            for (ShapelessIngredient ingredient : ingredients) {
                if (ingredient.getIngredient().getData() != null) {
                    this.recipe.addIngredient(ingredient.getCount(), ingredient.getIngredient().getData());
                } else {
                    this.recipe.addIngredient(ingredient.getCount(), ingredient.getIngredient().getType());
                }
            }
        }

        public ShapelessRecipeBuilder addIngredients(ShapelessIngredient... ingredients) {
            for (ShapelessIngredient ingredient : ingredients) {
                if (ingredient.getIngredient().getData() != null) {
                    this.recipe.addIngredient(ingredient.getCount(), ingredient.getIngredient().getData());
                } else {
                    this.recipe.addIngredient(ingredient.getCount(), ingredient.getIngredient().getType());
                }
            }
            return this;
        }

        public void build() {
            Bukkit.addRecipe(recipe);
            KEYS.add(recipe.getKey());
        }

    }

}
