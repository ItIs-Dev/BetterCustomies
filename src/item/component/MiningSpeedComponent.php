<?php

declare(strict_types=1);

namespace customiesdevs\customies\item\component;

use Exception;
use pocketmine\block\Block;
use function array_map;
use function implode;

function getWoodTier() {
    return [
        "Stone",
        "Cobblestone",
        "Mossy Cobblestone",
        "Stone Bricks",
        "Mossy Stone Bricks",
        "Cracked Stone Bricks",
        "Chiseled Stone Bricks",
        "Granite",
        "Polished Granite",
        "Diorite",
        "Polished Diorite",
        "Andesite",
        "Polished Andesite",
        "Smooth Stone",
        "Coal Ore",
        "Iron Ore",
        "Copper Ore",
        "Gold Ore",
        "Redstone Ore",
        "Lapis Lazuli Ore",
        "Diamond Ore",
        "Emerald Ore",
        "Nether Quartz Ore",
        "Nether Gold Ore",
        "Netherrack",
        "Quartz Block",
        "Chiseled Quartz Block",
        "Pillar Quartz Block",
        "Prismarine",
        "Prismarine Bricks",
        "Dark Prismarine",
        "Sea Lantern",
        "Red Sandstone",
        "Chiseled Red Sandstone",
        "Cut Red Sandstone",
        "Smooth Red Sandstone",
        "Sandstone",
        "Chiseled Sandstone",
        "Cut Sandstone",
        "Terracotta",
        "Glazed Terracotta",
        "Ice",
        "Packed Ice",
        "Blue Ice",
        "Obsidian",
        "Crying Obsidian",
        "End Stone",
        "End Stone Bricks",
        "Purpur Block",
        "Purpur Pillar",
        "Purpur Stairs",
        "Purpur Slab",
        "Basalt",
        "Polished Basalt",
        "Blackstone",
        "Polished Blackstone",
        "Polished Blackstone Bricks",
        "Chiseled Polished Blackstone",
        "Gilded Blackstone"
    ];
}

function getGoldTier() {
    return [
        "Stone",
        "Cobblestone",
        "Mossy Cobblestone",
        "Stone Bricks",
        "Mossy Stone Bricks",
        "Cracked Stone Bricks",
        "Chiseled Stone Bricks",
        "Granite",
        "Polished Granite",
        "Diorite",
        "Polished Diorite",
        "Andesite",
        "Polished Andesite",
        "Smooth Stone",
        "Coal Ore",
        "Iron Ore",
        "Copper Ore",
        "Gold Ore",
        "Redstone Ore",
        "Lapis Lazuli Ore",
        "Diamond Ore",
        "Emerald Ore",
        "Nether Quartz Ore",
        "Nether Gold Ore",
        "Netherrack",
        "Quartz Block",
        "Chiseled Quartz Block",
        "Pillar Quartz Block",
        "Prismarine",
        "Prismarine Bricks",
        "Dark Prismarine",
        "Sea Lantern",
        "Red Sandstone",
        "Chiseled Red Sandstone",
        "Cut Red Sandstone",
        "Smooth Red Sandstone",
        "Sandstone",
        "Chiseled Sandstone",
        "Cut Sandstone",
        "Terracotta",
        "Glazed Terracotta",
        "Ice",
        "Packed Ice",
        "Blue Ice",
        "Obsidian",
        "Crying Obsidian",
        "End Stone",
        "End Stone Bricks",
        "Purpur Block",
        "Purpur Pillar",
        "Purpur Stairs",
        "Purpur Slab",
        "Basalt",
        "Polished Basalt",
        "Blackstone",
        "Polished Blackstone",
        "Polished Blackstone Bricks",
        "Chiseled Polished Blackstone",
        "Gilded Blackstone",
        "Block of Raw Iron",
        "Block of Raw Copper",
        "Block of Raw Gold",
        "Ancient Debris"
    ];
}

function getStoneTier() {
    return [
        "Stone",
        "Cobblestone",
        "Mossy Cobblestone",
        "Stone Bricks",
        "Mossy Stone Bricks",
        "Cracked Stone Bricks",
        "Chiseled Stone Bricks",
        "Granite",
        "Polished Granite",
        "Diorite",
        "Polished Diorite",
        "Andesite",
        "Polished Andesite",
        "Smooth Stone",
        "Coal Ore",
        "Iron Ore",
        "Copper Ore",
        "Gold Ore",
        "Redstone Ore",
        "Lapis Lazuli Ore",
        "Diamond Ore",
        "Emerald Ore",
        "Nether Quartz Ore",
        "Nether Gold Ore",
        "Netherrack",
        "Quartz Block",
        "Chiseled Quartz Block",
        "Pillar Quartz Block",
        "Prismarine",
        "Prismarine Bricks",
        "Dark Prismarine",
        "Sea Lantern",
        "Red Sandstone",
        "Chiseled Red Sandstone",
        "Cut Red Sandstone",
        "Smooth Red Sandstone",
        "Sandstone",
        "Chiseled Sandstone",
        "Cut Sandstone",
        "Terracotta",
        "Glazed Terracotta",
        "Ice",
        "Packed Ice",
        "Blue Ice",
        "Obsidian",
        "Crying Obsidian",
        "End Stone",
        "End Stone Bricks",
        "Purpur Block",
        "Purpur Pillar",
        "Purpur Stairs",
        "Purpur Slab",
        "Basalt",
        "Polished Basalt",
        "Blackstone",
        "Polished Blackstone",
        "Polished Blackstone Bricks",
        "Chiseled Polished Blackstone",
        "Gilded Blackstone",
        "Block of Raw Iron",
        "Block of Raw Copper",
        "Block of Raw Gold"
    ];
}

function getIronTier() {
    return [
        "Stone",
        "Cobblestone",
        "Mossy Cobblestone",
        "Stone Bricks",
        "Mossy Stone Bricks",
        "Cracked Stone Bricks",
        "Chiseled Stone Bricks",
        "Granite",
        "Polished Granite",
        "Diorite",
        "Polished Diorite",
        "Andesite",
        "Polished Andesite",
        "Smooth Stone",
        "Coal Ore",
        "Iron Ore",
        "Copper Ore",
        "Gold Ore",
        "Redstone Ore",
        "Lapis Lazuli Ore",
        "Diamond Ore",
        "Emerald Ore",
        "Nether Quartz Ore",
        "Nether Gold Ore",
        "Netherrack",
        "Quartz Block",
        "Chiseled Quartz Block",
        "Pillar Quartz Block",
        "Prismarine",
        "Prismarine Bricks",
        "Dark Prismarine",
        "Sea Lantern",
        "Red Sandstone",
        "Chiseled Red Sandstone",
        "Cut Red Sandstone",
        "Smooth Red Sandstone",
        "Sandstone",
        "Chiseled Sandstone",
        "Cut Sandstone",
        "Terracotta",
        "Glazed Terracotta",
        "Ice",
        "Packed Ice",
        "Blue Ice",
        "Obsidian",
        "Crying Obsidian",
        "End Stone",
        "End Stone Bricks",
        "Purpur Block",
        "Purpur Pillar",
        "Purpur Stairs",
        "Purpur Slab",
        "Basalt",
        "Polished Basalt",
        "Blackstone",
        "Polished Blackstone",
        "Polished Blackstone Bricks",
        "Chiseled Polished Blackstone",
        "Gilded Blackstone",
        "Block of Raw Iron",
        "Block of Raw Copper",
        "Block of Raw Gold",
        "Ancient Debris",
        "Deepslate Coal Ore",
        "Deepslate Iron Ore",
        "Deepslate Copper Ore",
        "Deepslate Gold Ore",
        "Deepslate Redstone Ore",
        "Deepslate Lapis Lazuli Ore",
        "Deepslate Diamond Ore",
        "Deepslate Emerald Ore"
    ];
}

function getDiamondTier() {
    return [
        "Stone",
        "Cobblestone",
        "Mossy Cobblestone",
        "Stone Bricks",
        "Mossy Stone Bricks",
        "Cracked Stone Bricks",
        "Chiseled Stone Bricks",
        "Granite",
        "Polished Granite",
        "Diorite",
        "Polished Diorite",
        "Andesite",
        "Polished Andesite",
        "Smooth Stone",
        "Coal Ore",
        "Iron Ore",
        "Copper Ore",
        "Gold Ore",
        "Redstone Ore",
        "Lapis Lazuli Ore",
        "Diamond Ore",
        "Emerald Ore",
        "Nether Quartz Ore",
        "Nether Gold Ore",
        "Netherrack",
        "Quartz Block",
        "Chiseled Quartz Block",
        "Pillar Quartz Block",
        "Prismarine",
        "Prismarine Bricks",
        "Dark Prismarine",
        "Sea Lantern",
        "Red Sandstone",
        "Chiseled Red Sandstone",
        "Cut Red Sandstone",
        "Smooth Red Sandstone",
        "Sandstone",
        "Chiseled Sandstone",
        "Cut Sandstone",
        "Terracotta",
        "Glazed Terracotta",
        "Ice",
        "Packed Ice",
        "Blue Ice",
        "Obsidian",
        "Crying Obsidian",
        "End Stone",
        "End Stone Bricks",
        "Purpur Block",
        "Purpur Pillar",
        "Purpur Stairs",
        "Purpur Slab",
        "Basalt",
        "Polished Basalt",
        "Blackstone",
        "Polished Blackstone",
        "Polished Blackstone Bricks",
        "Chiseled Polished Blackstone",
        "Gilded Blackstone",
        "Block of Raw Iron",
        "Block of Raw Copper",
        "Block of Raw Gold",
        "Ancient Debris",
        "Deepslate Coal Ore",
        "Deepslate Iron Ore",
        "Deepslate Copper Ore",
        "Deepslate Gold Ore",
        "Deepslate Redstone Ore",
        "Deepslate Lapis Lazuli Ore",
        "Deepslate Diamond Ore",
        "Deepslate Emerald Ore",
        "Netherite Block",
        "Block of Raw Netherite"
    ];
}

final class MiningSpeedComponent implements ItemComponent {

	private array $destroySpeeds;
	private const TOOL_TYPES = [
        "wood" => getWoodTier(), 
        "stone" => getStoneTier(), 
        "iron" => getIronTier(), 
        "gold" => getGoldTier(), 
        "diamond" => getDiamondTier()
    ];

    const WOOD = "wood";
    const STONE = "stone";
    const IRON = "iron";
    const GOLD = "gold";
    const DIAMOND = "diamond";
	
    public function __construct(private string $toolType = "wood", private int $mspeed) {
        if (!in_array($this->toolType, self::TOOL_TYPES)) {
            throw new Exception('Tool type not listed, default is wood!');
        }

        $this->withBlocks($this->mspeed, self::TOOL_TYPES[$toolType]);
            
        $this->withTags($this->mspeed, 'metal', $this->toolType.'_pick_diggable');
    }
  
	public function getName(): string {
		return "minecraft:digger";
	}

	public function getValue(): array {
		return [
			"destroy_speeds" => $this->destroySpeeds
		];
	}

	public function isProperty(): bool {
		return false;
	}

	public function withBlocks(int $speed, array $blocks): MiningSpeedComponent {
		foreach($blocks as $block){
			$this->destroySpeeds[] = [
				"block" => [
					"name" => "minecraft:". str_replace(" ", "_", strtolower($block))
				],
				"speed" => $speed
			];
		}
		return $this;
	}

	public function withTags(int $speed, string ...$tags): MiningSpeedComponent {
		$query = implode(",", array_map(fn($tag) => "'" . $tag . "'", $tags));
		$this->destroySpeeds[] = [
			"block" => [
				"tags" => "query.any_tag(" . $query . ")"
			],
			"speed" => $speed
		];
		return $this;
	}
}
