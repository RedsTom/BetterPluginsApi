package fr.redstom.betterpluginsapi.item;

import org.bukkit.Material;
import org.bukkit.event.EventHandler;
import org.bukkit.event.Listener;
import org.bukkit.event.block.Action;
import org.bukkit.event.block.BlockBreakEvent;
import org.bukkit.event.inventory.InventoryClickEvent;
import org.bukkit.event.inventory.InventoryType;
import org.bukkit.event.player.PlayerInteractEvent;
import org.bukkit.event.player.PlayerItemBreakEvent;
import org.bukkit.inventory.ItemStack;

import java.util.ArrayList;
import java.util.List;

public class Items implements Listener {

    private static final List<BetterItem> ITEMS = new ArrayList<>();

    public static BetterItem register(BetterItem item) {
        ITEMS.add(item);
        return item;
    }

    @EventHandler
    public void onInventoryClick(InventoryClickEvent event) {
        if (event.getClickedInventory() == null || event.getClickedInventory().getType() != InventoryType.ANVIL || event.getCurrentItem() == null || event.getCurrentItem().getType() == Material.AIR || !(event.getCurrentItem().hasItemMeta()))
            return;
        if (event.getCurrentItem().getItemMeta().hasLore() && event.getSlot() == 2)
            event.setCancelled(true);
    }

    @EventHandler
    public void onInteract(PlayerInteractEvent event) {
        for (BetterItem item : ITEMS) {
            if (
                    event.getItem() == null
                            || event.getItem().getType() == Material.AIR
                            || !event.getItem().hasItemMeta()
                            || !event.getItem().getItemMeta().hasDisplayName()) continue;
            if (event.getItem().getType() == item.getBaseMaterial() && event.getItem().getItemMeta().getDisplayName().equalsIgnoreCase(item.getName())) {
                if (event.getAction() == Action.RIGHT_CLICK_AIR || event.getAction() == Action.RIGHT_CLICK_BLOCK)
                    item.onRightClick(event);
                if (event.getAction() == Action.LEFT_CLICK_AIR || event.getAction() == Action.LEFT_CLICK_BLOCK)
                    item.onLeftClick(event);
            }
        }
    }

    @EventHandler
    public void onBreak(PlayerItemBreakEvent event) {
        for (BetterItem item : ITEMS) {
            event.getBrokenItem().getType();
            if (event.getBrokenItem().getType() == Material.AIR
                    || !event.getBrokenItem().hasItemMeta()
                    || !event.getBrokenItem().getItemMeta().hasDisplayName())
                continue;
            if (event.getBrokenItem().getType() == item.getBaseMaterial() && event.getBrokenItem().getItemMeta().getDisplayName().equalsIgnoreCase(item.getName())) {
                item.onItemBreak(event);
            }
        }
    }

    @EventHandler
    public void onBlockBreak(BlockBreakEvent event) {

        event.setCancelled(true);
        ItemStack it = event.getPlayer().getInventory().getItemInMainHand();
        event.setCancelled(false);

        for (BetterItem item : ITEMS) {
            it.getType();
            if (it.getType() == Material.AIR || !it.hasItemMeta() || !it.getItemMeta().hasDisplayName()) continue;
            if (it.getType() == item.getBaseMaterial() && it.getItemMeta().getDisplayName().equalsIgnoreCase(item.getName())) {
                item.onBreakBlock(event);
            }

        }

    }

}
