<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' =>  1,
                'title' => 'From Vision to Reality: Building Stands That Impress at Conferences',
                'slug' => 'from-vision-to-reality-building-stands-that-impress-at-conferences',
                'short_desc' => 'Discover the art of building stands that impress at conferences. From vision to reality, unlock the secrets to creating impactful displays.',
                'ovw_text' => 'Crafting an impressive conference stand demands a blend of creativity, practicality, and attention to detail. Understanding your vision, thoughtful design, material selection, and precise execution is crucial for leaving a lasting impression.',
                'meta_description' =>  'Building Stands That Impress at Conferences',
                'meta_keywords' =>  'Building Stands, Conferences',
                'image' => 'from-vision-to-reality-building-stands-that-impress-at-conferences-v2.webp',
                'top_news' => '1',
                'categories' => [
                    'post' => [1, 2],
                ],
                'created_at' => now(),
                'updated_at' => now(),
                'content' => '<h2>Understanding the Vision</h2>
                                <p>Every great stand begins with a clear vision. It\'s the spark that ignites the creative process. When envisioning your stand, think about the message you want to convey. Is it about innovation, sustainability, or perhaps customer-centricity? This vision will be the guiding light throughout the design and construction phases.</p>
                                <h3>Key Elements of a Stand</h3>
                                <ol>
                                    <li><strong>Design Harmony:</strong> A stand\'s design should harmonise with your brand\'s identity. The colours, shapes, and layout should align with your company\'s personality.</li>
                                    <li><strong>Engagement Zone</strong> Consider creating distinct areas for product displays, interactive experiences, and meeting spaces. This ensures that attendees can easily navigate and engage with your offerings.</li>
                                    <li><strong>Branding Signage</strong> Make sure your company name and logo are prominently displayed. This helps in immediate brand recognition.</li>
                                </ol>
                                <img src="/blog/blog-bgaming-stand.jpg" alt="stands">
                                <h2>Putting Ideas on Paper</h2>
                                <p>With the vision in mind, it\'s time to put pen to paper, or rather, mouse to screen. This is where the initial sketches and designs take shape. Remember, the goal is to create a stand that not only looks impressive but is also functional.</p>
                                <h3>Balancing Aesthetics and Practicality</h3>
                                <p>While aesthetics are important, practicality should not be overlooked. Consider factors like traffic flow, accessibility, and space utilisation. A well-designed stand is both visually appealing and user-friendly.</p>
                                <img src="/blog/blog-gamanza-stand.jpg" alt="stands">
                                <h3>Incorporating Technology</h3>
                                <p>In today\'s digital age, technology can be a game-changer. Interactive screens, virtual reality experiences, and augmented reality displays can add a dynamic edge to your stand.</p>
                                <h2>Choosing the Right Materials</h2>
                                <p>Selecting the right materials is crucial in building stands that impress at conferences. Not only do they affect the stand\'s appearance, but they also impact its durability and sustainability.</p>
                                <h3>Sustainable Options</h3>
                                <p>Opting for eco-friendly materials not only aligns with current trends but also showcases your commitment to the environment. Consider materials like bamboo, recycled wood, or biodegradable plastics.</p>
                                <h3>Lightweight and Durable</h3>
                                <p>Transporting and assembling stands can be a logistical challenge. Choosing lightweight yet sturdy materials can make this process smoother and more cost-effective.</p>
                                <h2>The Construction Phase</h2>
                                <p>This is where the magic happens. Skilled craftsmen bring the designs to life, meticulously assembling each component. Attention to detail is key, ensuring that every element aligns with the original vision.</p>
                                <h3>On-Site Assembly</h3>
                                <p>Efficient on-site assembly is crucial. A well-coordinated team can make the difference between a seamless setup and a chaotic one.</p>
                                <h3>Quality Checks</h3>
                                <p>Before the grand reveal, thorough quality checks should be conducted. This ensures that everything is in perfect order and ready to leave a lasting impression.</p>
                                <h2>The Final Flourish</h2>
                                <p>As the conference day dawns, the stand is ready to welcome visitors. But the journey doesn\'t end here. Engaging with attendees, showcasing your products or services, and forging connections are all part of the process.</p>
                                <h3>Engaging with Attendees</h3>
                                <p>A warm smile and a friendly demeanour go a long way. Encourage interaction, answer questions, and make attendees feel valued.</p>
                                <h3>Showcasing Your Offerings</h3>
                                <p>Highlight your key products or services. Use engaging displays and demonstrations to pique interest.</p>
                                <h3>Follow-Up and Feedback</h3>
                                <p>After the conference, follow up with leads and gather feedback. This valuable input can inform future stand designs and improvements.From the initial spark of an idea to the bustling conference floor, the journey of building stands that impress at conferences is a testament to creativity, vision, and meticulous execution. Remember, a stand is more than wood and metal; it\'s a window into your company\'s soul. So, let it shine!</p>
                                <p>In conclusion, crafting an impressive conference stand requires a blend of creativity, practicality, and attention to detail. By understanding your vision, creating thoughtful designs, choosing the right materials, and executing with precision, you can create a stand that leaves a lasting impression on attendees. So, go ahead, and let your vision take centre stage!</p>',
            ],
            [
                'id' =>  2,
                'title' => 'The Future of Conference Stand Design: Trends and Predictions',
                'slug' => 'the-future-of-conference-stand-design-trends-and-predictions',
                'short_desc' => 'Explore the future of conference stand design, uncovering trends and predictions revolutionising business engagement at events through innovative concepts.',
                'ovw_text' => 'Embrace interactive, sustainable, and adaptable conference stand designs. Leverage technology like AI and AR for personalised experiences. Prepare for hybrid events, seamlessly blending physical and virtual engagement for maximum impact.',
                'meta_description' =>  'Conference stand design',
                'meta_keywords' =>  'Conference, stand, design',
                'image' => 'the-future-of-conference-stand-design-v2.webp',
                'top_news' => '1',
                'categories' => [
                    'post' => [1, 3, 4],
                ],
                'created_at' => now(),
                'updated_at' => now(),
                'content' => '<h2>Understanding the Vision</h2>
                                <p>Every great stand begins with a clear vision. It\'s the spark that ignites the creative process. When envisioning your stand, think about the message you want to convey. Is it about innovation, sustainability, or perhaps customer-centricity? This vision will be the guiding light throughout the design and construction phases.</p>
                                <h3>Key Elements of a Stand</h3>
                                <ol>
                                    <li><strong>Design Harmony:</strong> A stand\'s design should harmonise with your brand\'s identity. The colours, shapes, and layout should align with your company\'s personality.</li>
                                    <li><strong>Engagement Zone</strong> Consider creating distinct areas for product displays, interactive experiences, and meeting spaces. This ensures that attendees can easily navigate and engage with your offerings.</li>
                                    <li><strong>Branding Signage</strong> Make sure your company name and logo are prominently displayed. This helps in immediate brand recognition.</li>
                                </ol>
                                <img src="/blog/blog-bgaming-stand.jpg" alt="stands">
                                <h2>Putting Ideas on Paper</h2>
                                <p>With the vision in mind, it\'s time to put pen to paper, or rather, mouse to screen. This is where the initial sketches and designs take shape. Remember, the goal is to create a stand that not only looks impressive but is also functional.</p>
                                <h3>Balancing Aesthetics and Practicality</h3>
                                <p>While aesthetics are important, practicality should not be overlooked. Consider factors like traffic flow, accessibility, and space utilisation. A well-designed stand is both visually appealing and user-friendly.</p>
                                <img src="/blog/blog-gamanza-stand.jpg" alt="stands">
                                <h3>Incorporating Technology</h3>
                                <p>In today\'s digital age, technology can be a game-changer. Interactive screens, virtual reality experiences, and augmented reality displays can add a dynamic edge to your stand.</p>
                                <h2>Choosing the Right Materials</h2>
                                <p>Selecting the right materials is crucial in building stands that impress at conferences. Not only do they affect the stand\'s appearance, but they also impact its durability and sustainability.</p>
                                <h3>Sustainable Options</h3>
                                <p>Opting for eco-friendly materials not only aligns with current trends but also showcases your commitment to the environment. Consider materials like bamboo, recycled wood, or biodegradable plastics.</p>
                                <h3>Lightweight and Durable</h3>
                                <p>Transporting and assembling stands can be a logistical challenge. Choosing lightweight yet sturdy materials can make this process smoother and more cost-effective.</p>
                                <h2>The Construction Phase</h2>
                                <p>This is where the magic happens. Skilled craftsmen bring the designs to life, meticulously assembling each component. Attention to detail is key, ensuring that every element aligns with the original vision.</p>
                                <h3>On-Site Assembly</h3>
                                <p>Efficient on-site assembly is crucial. A well-coordinated team can make the difference between a seamless setup and a chaotic one.</p>
                                <h3>Quality Checks</h3>
                                <p>Before the grand reveal, thorough quality checks should be conducted. This ensures that everything is in perfect order and ready to leave a lasting impression.</p>
                                <h2>The Final Flourish</h2>
                                <p>As the conference day dawns, the stand is ready to welcome visitors. But the journey doesn\'t end here. Engaging with attendees, showcasing your products or services, and forging connections are all part of the process.</p>
                                <h3>Engaging with Attendees</h3>
                                <p>A warm smile and a friendly demeanour go a long way. Encourage interaction, answer questions, and make attendees feel valued.</p>
                                <h3>Showcasing Your Offerings</h3>
                                <p>Highlight your key products or services. Use engaging displays and demonstrations to pique interest.</p>
                                <h3>Follow-Up and Feedback</h3>
                                <p>After the conference, follow up with leads and gather feedback. This valuable input can inform future stand designs and improvements.From the initial spark of an idea to the bustling conference floor, the journey of building stands that impress at conferences is a testament to creativity, vision, and meticulous execution. Remember, a stand is more than wood and metal; it\'s a window into your company\'s soul. So, let it shine!</p>
                                <p>In conclusion, crafting an impressive conference stand requires a blend of creativity, practicality, and attention to detail. By understanding your vision, creating thoughtful designs, choosing the right materials, and executing with precision, you can create a stand that leaves a lasting impression on attendees. So, go ahead, and let your vision take centre stage!</p>',
            ],
        ];
        foreach ($data as $postData) {
            $postCats = $postData['categories'];
            unset($postData['categories']);
            $event = Post::create($postData);

            // Attach event categories
            $this->attachCategories($event, $postCats);
        }
    }
    private function attachCategories(Post $post, array $categories): void
    {
        // Attach post categories
        foreach ($categories['post'] as $postCatId) {
            $postCat = Category::find($postCatId);
            if ($postCat) {
                $post->categories()->attach($postCat->id);
            }
        }
    }
}
