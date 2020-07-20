package fr.redstom.betterpluginsapi.craft.ingredient.shaped;

import com.google.common.collect.Maps;
import org.bukkit.inventory.ItemStack;

import java.util.Map;

public class CraftShape {

    private final Map<Character, ItemStack> ingredients;
    private String[] shape;

    public CraftShape(String fl, String sl, String tl, ShapedIngredient... ingredients) {
        this.shape = new String[]{
                fl,
                sl,
                tl
        };
        this.ingredients = Maps.newHashMap();
        for (ShapedIngredient ingredient : ingredients) {
            this.ingredients.put(ingredient.getLetter(), ingredient.getIngredient());
        }
    }

    public Map<Character, ItemStack> getIngredients() {
        return ingredients;
    }

    public String[] getShape() {
        return shape;
    }

    public CraftShape addIngredients(ShapedIngredient... ingredients) {
        for (ShapedIngredient ingredient : ingredients) {
            this.ingredients.put(ingredient.getLetter(), ingredient.getIngredient());
        }
        return this;
    }

    public CraftShape setShape(String fl, String sl, String tl) {
        this.shape = new String[]{
                fl,
                sl,
                tl
        };
        return this;
    }
}
