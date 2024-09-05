<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Event;
use Illuminate\Database\Seeder;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $eventsData = [
            [
                'id'    => 1,
                'title' => 'Bambora at SiGMA ‘19',
                'slug' => 'bambora-at-sigma-19',
                'desc' => 'Bambora, our long-time client in Online Payment Solutions, approached us in 2019 for a standout exhibition at the SiGMA iGaming Summit.',
                'overview' => "Bambora, our long-time client in Online Payment Solutions, approached us in 2019 for a standout exhibition at SiGMA iGaming Summit. They wanted a clean, open design to engage many clients. We blended simplicity with quality, paying close attention to brand elements. \nWe showcased their 3D logo at the stand's centre for maximum visibility. The giraffe logo adorned the wall in vertical splendour with white LED strips. We maintained a consistent, clean look with white-toned furniture, bar counter, and flooring. The raised floor added workspace and concealed services. \nIn the end, we delivered a sleek, functional expo stand that met all of Bambora's exhibition needs.",
                'meta_description' => 'Explore how IPOINT INT designed and built the Bambora exhibition stand with attention to brand aesthetics and functionality.',
                'meta_keywords' => 'Bambora exhibition stand, SiGMA iGaming Summit, Bespoke stand design, Minimalist exhibition stand, Illuminated 3D logo, IPOINT INT',
                'image' => '/projects/1/bambora-stand-banner.webp',
                'featured' => '1',
                'created_at' => now(),
                'updated_at' => now(),
                'bannerColor' => '#3A2169',
                'content' => 'Case1',
                'categories' => [
                    'event_cats' => [5, 6],
                    'event_year' => 10,
                    'stand_size' => 14,
                ],
            ],
        ];

        foreach ($eventsData as $eventData) {
            $eventCats = $eventData['categories'];
            unset($eventData['categories']);
            $event = Event::create($eventData);

            // Attach event categories
            $this->attachCategories($event, $eventCats);
        }
    }

    private function attachCategories(Event $event, array $categories)
    {
        // Attach event categories
        foreach ($categories['event_cats'] as $eventCatId) {
            $eventCat = Category::find($eventCatId);
            if ($eventCat) {
                $event->categories()->attach($eventCat->id);
            }
        }

        // Attach event year
        $eventYear = Category::find($categories['event_year']);
        if ($eventYear) {
            $event->categories()->attach($eventYear->id);
        }

        // Attach stand size
        $standSize = Category::find($categories['stand_size']);
        if ($standSize) {
            $event->categories()->attach($standSize->id);
        }
    }
}
