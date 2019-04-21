<?php

namespace RubyFaker;

use Faker\Provider\Base;

class Coffee extends Base
{
    public function coffeeVariety()
    {
        return static::randomElement(["Liberica", "S288", "S795", "Kent", "Java", "Dilla", "Sumatara", "Catuai", "Pacamara", "Mundo Novo", "Red Bourbon", "Bourbon", "Yellow Bourbon", "Pacas", "Caturra", "Pink Bourbon", "Colombia", "Obata", "Catimors", "Sarchimor", "Mokka", "Kaffa", "Gimma", "Tafari-Kela", "S.4", "Agaro", "Dega", "Barbuk Sudan", "Ennarea", "Geisha", "Gesha", "Blue Mountain", "Kona", "San Ramon", "SL28", "SL34", "Villa Sarchi", "Villalobos", "Typica", "Ethiopian Heirloom"]);
    }

    public function coffeeIntensifier()
    {
        return static::randomElement(["muted", "dull", "mild", "structured", "balanced", "rounded", "soft", "faint", "delicate", "dry", "astringent", "quick", "clean", "crisp", "bright", "vibrant", "tart", "wild", "unbalanced", "sharp", "pointed", "dense", "deep", "complex", "juicy", "lingering", "dirty"]);
    }

    public function coffeeBody()
    {
        return static::randomElement(["watery", "tea-like", "silky", "slick", "juicy", "smooth", "syrupy", "round", "creamy", "full", "velvety", "big", "chewy", "coating"]);
    }

    public function coffeeDescriptor()
    {
        return static::randomElement(["bergamot", "hops", "black-tea", "green-tea", "mint", "sage", "dill", "grassy", "snow pea", "sweet pea", "mushroom", "squash", "green pepper", "olive", "leafy greens", "hay", "tobacco", "cedar", "fresh wood", "soil", "tomato", "sundried tomato", "soy sauce", "leathery", "clove", "liquorice", "curry", "nutmeg", "ginger", "corriander", "cinnamon", "white pepper", "black pepper", "carbon", "smokey", "burnt sugar", "toast", "fresh bread", "barley", "wheat", "rye", "graham cracker", "granola", "almond", "hazelnut", "pecan", "cashew", "peanut", "walnut", "cola", "molasses", "maple syrup", "carmel", "brown sugar", "sugar cane", "marshmallow", "cream", "butter", "honey", "nougat", "vanilla", "milk chocolate", "cocoa powder", "bittersweet chocolate", "bakers chocolate", "cacao nibs", "prune", "dates", "figs", "raisin", "golden raisin", "black currant", "red currant", "blueberry", "strawberry", "raspberry", "cranberry", "black cherry", "cherry", "plum", "apricot", "nectarine", "peach", "coconut", "banana", "kiwi", "mango", "papaya", "pineapple", "passion fruit", "tamarind", "star fruit", "lychee", "concord grape", "red grape", "green grape", "white grape", "cantaloupe", "honeydew", "watermelon", "red apple", "green apple", "orange", "mandarin", "tangerine", "clementine", "grapefruit", "lime", "meyer lemon", "lemonade", "lemon", "orange creamsicle", "marzipan", "nutella", "lemongrass", "orange blossom", "jasmine", "honeysuckle", "magnolia", "lavender", "rose hips", "hibiscus", "lemon verbena", "medicinal", "quakery", "baggy", "potato defect!", "musty", "rubber"]);
    }
}