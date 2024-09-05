<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'title' => 'Booth Conceptualisation',
                'subtitle' => 'Booth conceptualisation means putting together ideas into a functional booth design concept that visualises the end product before its physical existence.',
                'description' => 'We turn ideas into booth designs, aligning with client brand ethos and exhibition goals. Through open communication, we refine concepts, providing detailed 3D renderings for clear visualisation.',
                'fulltext' => 'The concepts we create reflect our client’s brand ethos and accommodate their goals and purposes for the exhibition. We ensure that the end product sends the right message to the audience. We provide multiple concepts to our clients so they can evaluate every available option. Our back-and-forth communication with the client ensures that their visions are well represented. All concepts are rendered in 3D and contain every detail necessary to give a clear picture of the project.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'title' => 'Branding and Graphic Design',
                'subtitle' => 'Branding has a major impact on the outcome of your exhibition since it determines the audience’s perception of your brand.',
                'description' => 'Branding shapes audience perception. Our expertise guides the creative direction, leveraging stunning graphics, artwork, and strategies for a standout brand presence at exhibitions.',
                'fulltext' => 'With our knowledge and expertise in branding, we can steer you in the right creative direction that will bring results. With stunning graphics, creative artwork and powerful strategies, we can help you build a strong brand presence that will make you stand out during the exhibition.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'title' => 'Project Management',
                'subtitle' => 'With years of experience, we lead your project all the way from conceptualization to actual completion of the booth, while expertly handling all the processes in between.',
                'description' => 'From concept to booth completion, we expertly manage every step. Our experienced team ensures seamless coordination, concept development, material sourcing, and precise execution for event success.',
                'fulltext' => 'Project management often involves dealing with intricate matters such as developing concepts that have a higher chance of getting approval from the event organizers, sourcing the right materials with the right specifications, liaising with different parties involved and more. With experts like us on the job, you can rest assured that everything will be handled according to the plan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'title' => 'Booth Construction',
                'subtitle' => 'After a concept is approved and the right materials are sourced from our trusted suppliers, we begin the execution phase.',
                'description' => 'After concept approval, coordinated effort among designers, constructors, suppliers, and organisers ensures seamless execution. Our meticulous planning guarantees client satisfaction.',
                'fulltext' => 'In the execution phase, strong coordination is maintained between designers, constructors, suppliers and the event organisers to ensure everyone is on the same page. Our well-planned concepts, behind-the-scenes preparations and strict supervision, ensures that the whole process is efficient, without any complications and meets the expectation of our client.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'title' => 'Concierge Services',
                'subtitle' => 'In the fast-paced and frantic scene of exhibitions, clients often need an expert helping hand to make sure that all of their needs are taken care of.',
                'description' => 'In the buzzing world of exhibitions, clients rely on our expert support. From pre-planning to on-site tasks, our concierges ensure seamless experiences, leaving clients free to engage with prospects.',
                'fulltext' => 'Pre-planning of the event such as hotel and restaurant bookings, merchandising, shipping etc. are just some of the things that need to be handled properly. During exhibitions, any mismanagement whatsoever may cause the companies to lose prospects, not to mention other inconveniences that may arise.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'title' => 'Post-Event Marketing',
                'subtitle' => 'We extend event impact through post-marketing, leveraging professional media on social platforms, including photography, drone filming, and quality footage.',
                'description' => "Our post-event marketing enhances your event's impact. Through professional media, we extend success, creating a lasting impression for a wider audience, and ensuring strategic exhibition closure.",
                'fulltext' => "By showcasing your achievements with high-quality materials, we not only enhance your visibility among a broader audience but also create a memorable and enduring experience. Ultimately, this invaluable service provides a strong and strategic conclusion to our clients' exhibitions.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'title' => 'Beyond',
                'subtitle' => 'We specialise in elevating businesses through comprehensive solutions in Branding, Web, Software Development, and beyond.',
                'description' => "We empower businesses with innovative solutions in branding, web, and software development. Collaborating for creative, impactful outcomes, we're dedicated to meaningful work that betters the world.",
                'fulltext' => "We develop close collaborations, nurturing innovative thinking and embracing creative approaches to ensure extraordinary outcomes. Our dedication transcends mere business success; we're wholeheartedly devoted to work that leaves a positive and lasting impact on the world, ultimately creating a better place for all.",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        Service::insert($data);
    }
}
