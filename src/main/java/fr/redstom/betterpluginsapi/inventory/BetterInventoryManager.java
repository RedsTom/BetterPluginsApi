package fr.redstom.betterpluginsapi.inventory;

import org.bukkit.event.EventHandler;
import org.bukkit.event.Listener;
import org.bukkit.event.inventory.InventoryClickEvent;
import org.bukkit.event.inventory.InventoryCloseEvent;

import java.util.ArrayList;
import java.util.Collection;
import java.util.List;

public class BetterInventoryManager implements Listener {

    private static final List<BetterInventory> inventoryList = new ArrayList<>();

    /**
     * The method to add an inventory to the list
     *
     * @param inventory The inventory to add
     */
    public static void addInventory(BetterInventory inventory) {
        inventoryList.add(inventory);
    }

    /**
     * The method to remove an inventory to the list
     *
     * @param inventory The inventory to remove
     */
    public static void removeInventory(BetterInventory inventory) {
        inventoryList.remove(inventory);
    }

    /**
     * The method to get the list
     *
     * @return All the inventories
     */
    public static Collection<BetterInventory> getInventories() {
        return inventoryList;
    }

    /**
     * The event to detect if an inventory is clicked
     *
     * @param event The event of the click
     */
    @EventHandler
    public void onInventoryClick(InventoryClickEvent event) {

        BetterInventory sInventory = null;

        for (BetterInventory inventory : getInventories()) {
            if (event.getClickedInventory() == null || event.getCurrentItem() == null || event.getCurrentItem().getItemMeta() == null)
                return;
            if (event.getClickedInventory().getName().equalsIgnoreCase(inventory.getInventory().getName())) {
                sInventory = inventory;
            }
        }

        if (sInventory == null) return;

        sInventory.onClick(event);
        event.setCancelled(true);

    }

    @EventHandler
    public void onInventoryClose(InventoryCloseEvent event) {

        BetterInventory sInventory = null;

        for (BetterInventory inventory : getInventories()) {
            if (event.getInventory() == null) return;
            if (event.getInventory().getName().equalsIgnoreCase(inventory.getInventory().getName())) {
                sInventory = inventory;
            }
        }

        sInventory.onClose(event);
    }

}
