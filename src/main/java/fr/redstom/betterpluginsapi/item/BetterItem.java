package fr.redstom.betterpluginsapi.item;

import org.bukkit.ChatColor;
import org.bukkit.Material;
import org.bukkit.event.block.BlockBreakEvent;
import org.bukkit.event.player.PlayerInteractEvent;
import org.bukkit.event.player.PlayerItemBreakEvent;
import org.bukkit.inventory.ItemStack;

public abstract class BetterItem {

    private final Material baseMaterial;
    private final String name;

    public BetterItem(String name, Material baseMaterial) {
        this.name = name;
        this.baseMaterial = baseMaterial;
    }

    public Material getBaseMaterial() {
        return baseMaterial;
    }

    public String getName() {
        return name;
    }

    public ItemStack getItemStack(int i) {
        return new ItemBuilder(baseMaterial).setName(name).setLore(ChatColor.translateAlternateColorCodes('&', "&5&o(+NBT)")).setAmount(i).toItemStack();
    }

    public ItemStack getItemStack() {
        return getItemStack(1);
    }

    public abstract void onLeftClick(PlayerInteractEvent event);

    public abstract void onRightClick(PlayerInteractEvent event);

    public abstract void onBreakBlock(BlockBreakEvent event);

    public abstract void onItemBreak(PlayerItemBreakEvent event);
}
