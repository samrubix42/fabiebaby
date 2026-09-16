<?php

namespace App\Livewire;

use Livewire\Component;

class HomePage extends Component
{
    public string $activeCategory = 'All';

    public float $babyWeight = 6.5;

    public bool $cartOpen = false;

    public ?array $selectedProduct = null;

    public string $toastMessage = '';

    public array $cart = [
        [
            'id' => 1,
            'name' => 'Fabie Baby Ultra Soft Pants',
            'variant' => 'Size M (6-11kg) • 44 Packs',
            'price' => 18.99,
            'image' => '/images/diapers.jpg',
            'quantity' => 1,
        ],
    ];

    public array $products = [
        [
            'id' => 1,
            'name' => 'Fabie Baby Ultra Soft Diapers',
            'subtitle' => '12H Leak-Proof • 100% Organic Bamboo',
            'category' => 'Diapers',
            'price' => 18.99,
            'oldPrice' => 24.99,
            'rating' => 4.9,
            'reviewsCount' => 128,
            'badge' => 'Best Seller',
            'badgeColor' => 'bg-vibrant-rose text-white',
            'image' => '/images/diapers.jpg',
            'sizes' => ['NB (0-4kg)', 'S (3-8kg)', 'M (6-11kg)', 'L (9-14kg)', 'XL (12-17kg)'],
            'description' => 'Engineered with 3D air-embossed topsheet, 360° elastic waistband, and zero chlorine pulp for ultimate baby skin comfort.',
        ],
        [
            'id' => 2,
            'name' => 'Fabie Baby 99% Pure Water Wipes',
            'subtitle' => 'Unscented • Extra Thick Cotton Texture',
            'category' => 'Wipes',
            'price' => 12.49,
            'oldPrice' => 16.00,
            'rating' => 5.0,
            'reviewsCount' => 96,
            'badge' => 'Must Have',
            'badgeColor' => 'bg-pastel-green text-white',
            'image' => '/images/wipes.jpg',
            'sizes' => ['1 Pack (80 Wipes)', '3 Pack Value', '6 Pack Jumbo Box'],
            'description' => 'Made with 99.9% EDI ultra-pure water and aloe vera extract. Hypoallergenic and free from alcohol, parabens, and fragrance.',
        ],
        [
            'id' => 3,
            'name' => 'Fabie Baby Organic Hydrating Lotion',
            'subtitle' => 'Chamomile & Oat Extract • 24H Moisture',
            'category' => 'Skincare',
            'price' => 14.99,
            'oldPrice' => 19.50,
            'rating' => 4.8,
            'reviewsCount' => 84,
            'badge' => 'Organic',
            'badgeColor' => 'bg-soft-purple text-white',
            'image' => '/images/lotion.jpg',
            'sizes' => ['250ml Pump', '400ml Family Size'],
            'description' => 'Dermatologist tested formula that restores baby’s natural skin barrier with organic shea butter and chamomile extracts.',
        ],
        [
            'id' => 4,
            'name' => 'Tear-Free Shampoo & Body Wash',
            'subtitle' => 'Natural Coconut Cleansers • Gentle Formula',
            'category' => 'Bath',
            'price' => 13.99,
            'oldPrice' => 17.99,
            'rating' => 4.9,
            'reviewsCount' => 112,
            'badge' => 'New Formula',
            'badgeColor' => 'bg-sky-blue text-white',
            'image' => '/images/wash.jpg',
            'sizes' => ['300ml Bottle', '500ml Refill'],
            'description' => 'Sulfate-free tearless wash enriched with oat lipid oil to gently cleanse fine hair and tender baby skin without drying.',
        ],
        [
            'id' => 5,
            'name' => 'Fabie Baby Night Protection Pants',
            'subtitle' => 'Overnight Dryness • Double Leak Guard',
            'category' => 'Diapers',
            'price' => 21.99,
            'oldPrice' => 27.99,
            'rating' => 4.9,
            'reviewsCount' => 73,
            'badge' => 'Overnight Core',
            'badgeColor' => 'bg-warm-peach text-white',
            'image' => '/images/diapers.jpg',
            'sizes' => ['M (6-11kg)', 'L (9-14kg)', 'XL (12-17kg)', 'XXL (15+kg)'],
            'description' => 'High-absorbency SAP core locks up to 1000ml fluid instantly. Breathable outer layer keeps skin cool all night long.',
        ],
        [
            'id' => 6,
            'name' => 'Bamboo Gentle Cleansing Wipes',
            'subtitle' => '100% Biodegradable • Sensitive Skin',
            'category' => 'Wipes',
            'price' => 15.99,
            'oldPrice' => 19.99,
            'rating' => 4.7,
            'reviewsCount' => 61,
            'badge' => 'Eco Friendly',
            'badgeColor' => 'bg-mint-teal text-white',
            'image' => '/images/wipes.jpg',
            'sizes' => ['3 Pack (240 Wipes)', '6 Pack Box'],
            'description' => 'Eco-certified bamboo fibers soft as silk. Naturally antibacterial, pH 5.5 balanced for newborn skin sensitivity.',
        ],
    ];

    public function setCategory(string $category): void
    {
        $this->activeCategory = $category;
    }

    public function openQuickView(int $productId): void
    {
        foreach ($this->products as $product) {
            if ($product['id'] === $productId) {
                $this->selectedProduct = $product;
                break;
            }
        }
    }

    public function closeQuickView(): void
    {
        $this->selectedProduct = null;
    }

    public function toggleCart(): void
    {
        $this->cartOpen = ! $this->cartOpen;
    }

    public function addToCart(int $productId, string $selectedSize = 'Standard Pack'): void
    {
        foreach ($this->products as $product) {
            if ($product['id'] === $productId) {
                $found = false;
                foreach ($this->cart as &$item) {
                    if ($item['id'] === $productId) {
                        $item['quantity']++;
                        $found = true;
                        break;
                    }
                }
                if (! $found) {
                    $this->cart[] = [
                        'id' => $product['id'],
                        'name' => $product['name'],
                        'variant' => $selectedSize,
                        'price' => $product['price'],
                        'image' => $product['image'],
                        'quantity' => 1,
                    ];
                }
                $this->toastMessage = "Added {$product['name']} to your cart!";
                $this->cartOpen = true;
                break;
            }
        }
    }

    public function updateQuantity(int $index, int $change): void
    {
        if (isset($this->cart[$index])) {
            $this->cart[$index]['quantity'] += $change;
            if ($this->cart[$index]['quantity'] <= 0) {
                array_splice($this->cart, $index, 1);
            }
        }
    }

    public function getRecommendedDiaperSizeProperty(): array
    {
        $w = $this->babyWeight;
        if ($w < 4.0) {
            return ['size' => 'Newborn (NB)', 'range' => '0 - 4 kg', 'desc' => 'Ultra-gentle navel protection cut for newborn umbilical care.'];
        } elseif ($w <= 7.0) {
            return ['size' => 'Small (S)', 'range' => '3 - 8 kg', 'desc' => 'Snug leak-proof fit with wetness indicator band.'];
        } elseif ($w <= 11.0) {
            return ['size' => 'Medium (M)', 'range' => '6 - 11 kg', 'desc' => 'Flexible 360° stretch waistband for active rolling babies.'];
        } elseif ($w <= 14.0) {
            return ['size' => 'Large (L)', 'range' => '9 - 14 kg', 'desc' => 'High-absorbency core designed for crawling & walking infants.'];
        } else {
            return ['size' => 'Extra Large (XL)', 'range' => '12 - 17+ kg', 'desc' => 'Maximum absorbency for toddlers and comfortable overnight sleep.'];
        }
    }

    public function render()
    {
        $filteredProducts = $this->activeCategory === 'All'
            ? $this->products
            : array_filter($this->products, fn ($p) => $p['category'] === $this->activeCategory);

        $cartSubtotal = array_reduce($this->cart, fn ($carry, $item) => $carry + ($item['price'] * $item['quantity']), 0);
        $cartCount = array_reduce($this->cart, fn ($carry, $item) => $carry + $item['quantity'], 0);

        return view('livewire.home-page', [
            'filteredProducts' => $filteredProducts,
            'cartSubtotal' => $cartSubtotal,
            'cartCount' => $cartCount,
            'recommendedSize' => $this->recommendedDiaperSize,
        ]);
    }
}
