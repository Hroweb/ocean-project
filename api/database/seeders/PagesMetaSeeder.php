<?php

namespace Database\Seeders;

use App\Models\Dashboard\Meta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PagesMetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'metable_id' => 1,
                'meta_key' => 'meta_description',
                'meta_value' => 'Elevate your exhibition experience with IPOINT Build. From booth conceptualisation to post-event marketing, we’re your one-stop shop for success.',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'metable_id' => 1,
                'meta_key' => 'meta_keywords',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'meta_value' => 'Exhibition stands, Booth conceptualisation, Branding and graphic design, Project management, Booth construction, Concierge services, Post-event marketing',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'metable_id' => 1,
                'meta_key' => 'og_title',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'meta_value' => 'Home | IPOINT Build | Dynamic Event Solutions',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 4,
                'metable_id' => 1,
                'meta_key' => 'og_desc',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'meta_value' => 'Elevate your exhibition experience with IPOINT Build. From booth conceptualisation to post-event marketing, we’re your one-stop shop for success.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 5,
                'metable_id' => 1,
                'meta_key' => 'og_url',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'meta_value' => 'https://www.build.events/',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 6,
                'metable_id' => 1,
                'meta_key' => 'og_type',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'meta_value' => 'website',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 7,
                'metable_id' => 1,
                'meta_key' => 'banner_animation',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'banner',
                'meta_value' => 'bolt-v2.json',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 8,
                'metable_id' => 1,
                'meta_key' => 'banner_section_title',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'banner',
                'meta_value' => 'Your exhibition journey begins here',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 9,
                'metable_id' => 1,
                'meta_key' => 'banner_section_desc',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'banner',
                'meta_value' => 'We transform concepts into stunning exhibition stands, offering end-to-end event solutions, from design to execution.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 10,
                'metable_id' => 1,
                'meta_key' => 'projects_finished',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'banner',
                'meta_value' => 125,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 11,
                'metable_id' => 1,
                'meta_key' => 'years_of_experience',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'banner',
                'meta_value' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 12,
                'metable_id' => 1,
                'meta_key' => 'clients_worldwide',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'banner',
                'meta_value' => 52,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 13,
                'metable_id' => 1,
                'meta_key' => 'video',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'video',
                'meta_value' => 'stands-intro-video-qm.webm',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 14,
                'metable_id' => 1,
                'meta_key' => 'poster',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'video',
                'meta_value' => 'intro-poster.webp',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 15,
                'metable_id' => 1,
                'meta_key' => 'projects_title',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'projects',
                'meta_value' => 'Projects',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 16,
                'metable_id' => 1,
                'meta_key' => 'projects_desc',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'projects',
                'meta_value' => 'Explore our diverse portfolio of passionately designed stands, each a testament to our commitment to excellence.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 17,
                'metable_id' => 1,
                'meta_key' => 'projects_btn',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'projects',
                'meta_value' => 'see all projects',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 18,
                'metable_id' => 1,
                'meta_key' => 'services_title',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'services',
                'meta_value' => 'services',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 19,
                'metable_id' => 1,
                'meta_key' => 'services_desc',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'services',
                'meta_value' => 'Let us take care of your exhibition from start to finish, and beyond, so you can focus on more pressing matters.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 20,
                'metable_id' => 1,
                'meta_key' => 'services_btn',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'services',
                'meta_value' => 'see all services',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 21,
                'metable_id' => 1,
                'meta_key' => 'blog_title',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'blog',
                'meta_value' => 'fresh updates',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 22,
                'metable_id' => 1,
                'meta_key' => 'blog_desc',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'blog',
                'meta_value' => 'Stay updated with our latest blog articles on building exhibition booths, tips, and industry insights.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 23,
                'metable_id' => 1,
                'meta_key' => 'blog_btn',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'blog',
                'meta_value' => 'see all posts',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 24,
                'metable_id' => 1,
                'meta_key' => 'clients_title',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'clients',
                'meta_value' => 'Our Clients',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 25,
                'metable_id' => 1,
                'meta_key' => 'clients_desc',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'clients',
                'meta_value' => 'Meet the valued clients who have entrusted us to elevate their exhibition experiences and brand presence.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // about-us
            [
                'id' => 26,
                'metable_id' => 2,
                'meta_key' => 'meta_description',
                'meta_value' => 'Meet the brilliant minds behind IPOINT Build - your dedicated team for exceptional exhibition experiences. Get to know our event experts!',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 27,
                'metable_id' => 2,
                'meta_key' => 'meta_keywords',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'meta_value' => 'exhibition experts, IPOINT Build team, meet the team, about us, about the company, team members',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 28,
                'metable_id' => 2,
                'meta_key' => 'og_title',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'meta_value' => 'About | IPOINT Build | Dynamic Event Solutions',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 29,
                'metable_id' => 2,
                'meta_key' => 'og_desc',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'meta_value' => 'Meet the brilliant minds behind IPOINT Build - your dedicated team for exceptional exhibition experiences. Get to know our event experts!',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 30,
                'metable_id' => 2,
                'meta_key' => 'og_url',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'meta_value' => 'https://www.build.events/about-us',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 31,
                'metable_id' => 2,
                'meta_key' => 'og_type',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'meta_value' => 'website',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 32,
                'metable_id' => 2,
                'meta_key' => 'banner',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'banner',
                'meta_value' => 'about-page-banner.svg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 33,
                'metable_id' => 2,
                'meta_key' => 'cp_title',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'banner',
                'meta_value' => 'Get to know us',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 34,
                'metable_id' => 2,
                'meta_key' => 'cp_video_link',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'banner',
                'meta_value' => 'https://www.youtube.com/embed/-RQItgDbUJI?si=pbZMk76oEMjfh08u',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 35,
                'metable_id' => 2,
                'meta_key' => 'cp_intro_title',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'intro',
                'meta_value' => 'IPOINT BUILD',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 36,
                'metable_id' => 2,
                'meta_key' => 'cp_intro_text',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'intro',
                'meta_value' => '<p>IPOINT BUILD excels in creating standout exhibition experiences. Our process encompasses booth conceptualization, branding, project management, construction, personal concierge, and post-event marketing. We offer innovative solutions in branding, web, and software development to help businesses thrive. With a dedicated team and a focus on client satisfaction, we ensure seamless and memorable exhibition experiences that leave a lasting impact.</p><p>Our dedication to excellence is evident in our attention to detail at every stage of the exhibition process. From the initial conceptualization phase, where we bring your ideas to life in vivid 3D renderings, to the meticulous planning and execution in construction, our commitment to quality is uncompromising. With years of experience in project management, we navigate the complexities of event organization with finesse, ensuring everything runs according to plan.</p><p>Our personal concierge service provides a valuable helping hand, handling pre-event logistics and on-site tasks, allowing clients to focus on building valuable connections. Furthermore, our expertise extends beyond exhibitions, offering cutting-edge solutions in branding, web development, and software development to propel businesses forward. When you choose IPOINT BUILD, you&apos;re choosing a partner dedicated to delivering exceptional results and creating experiences that resonate long after the event concludes.</p>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 37,
                'metable_id' => 2,
                'meta_key' => 'cp_pc_title',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'process',
                'meta_value' => 'How we collaborate',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 38,
                'metable_id' => 2,
                'meta_key' => 'cp_pc_text',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'process',
                'meta_value' => 'Our seamless, success-driven solutions ensure your vision becomes an impactful success.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 39,
                'metable_id' => 2,
                'meta_key' => 'cp_gr_title_1',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'grow',
                'meta_value' => 'Let’s Work Together',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 40,
                'metable_id' => 2,
                'meta_key' => 'cp_gr_title_2',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'grow',
                'meta_value' => 'Let’s Grow Together',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 41,
                'metable_id' => 2,
                'meta_key' => 'cp_grow_1_title',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'grow',
                'meta_value' => 'Communication',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 42,
                'metable_id' => 2,
                'meta_key' => 'cp_grow_1_text',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'grow',
                'meta_value' => 'Our back-and-forth communication with the client ensures that their visions are well represented.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 43,
                'metable_id' => 2,
                'meta_key' => 'box1_icon',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'grow',
                'meta_value' => 'cmc-icon-sm.svg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 44,
                'metable_id' => 2,
                'meta_key' => 'cp_grow_2_title',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'grow',
                'meta_value' => 'One-Stop-Shop',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 45,
                'metable_id' => 2,
                'meta_key' => 'cp_grow_2_text',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'grow',
                'meta_value' => 'From concept to execution and beyond, IPOINT BUILD is your one-stop-shop for all things exhibition.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 46,
                'metable_id' => 2,
                'meta_key' => 'box2_icon',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'grow',
                'meta_value' => 'one-stop-icon-sm.svg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 47,
                'metable_id' => 2,
                'meta_key' => 'cp_grow_3_title',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'grow',
                'meta_value' => 'Peace of mind',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 48,
                'metable_id' => 2,
                'meta_key' => 'cp_grow_3_text',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'grow',
                'meta_value' => 'We provide peace of mind through careful planning, constant updates, and a dedicated team focused on excellence.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 49,
                'metable_id' => 2,
                'meta_key' => 'box3_icon',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'grow',
                'meta_value' => 'pc-mind-icon-sm.svg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 50,
                'metable_id' => 2,
                'meta_key' => 'grow_btn',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'grow',
                'meta_value' => 'Let’s work together',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 51,
                'metable_id' => 2,
                'meta_key' => 'cp_gal_title',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'gallery',
                'meta_value' => 'Gallery',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 52,
                'metable_id' => 2,
                'meta_key' => 'cp_gal_text',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'gallery',
                'meta_value' => 'We merge aesthetic design with reliable processes to help you achieve your goals.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 53,
                'metable_id' => 2,
                'meta_key' => 'cp_team_title',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'team',
                'meta_value' => 'Our Team',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 54,
                'metable_id' => 2,
                'meta_key' => 'cp_team_text',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'team',
                'meta_value' => 'We infuse a cocktail of expertise with a shot of passion for extraordinary results!',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 55,
                'metable_id' => 2,
                'meta_key' => 'cp_cl_title',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'clients',
                'meta_value' => 'Our Clients',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 56,
                'metable_id' => 2,
                'meta_key' => 'cp_cl_text',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'clients',
                'meta_value' => 'Meet the valued clients who have entrusted us to elevate their exhibition experiences and brand presence.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // portfolio
            [
                'id' => 57,
                'metable_id' => 4,
                'meta_key' => 'meta_description',
                'meta_value' => 'Experience some of our best exhibition stands. Discover captivating designs carefully crafted for a memorable display.',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 58,
                'metable_id' => 4,
                'meta_key' => 'meta_keywords',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'meta_value' => 'Exhibition stands, IPOINT Build stands, booth designs, craftsmanship, Memorable displays, Precision in design',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 59,
                'metable_id' => 4,
                'meta_key' => 'og_title',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'meta_value' => 'Our Projects | IPOINT Build | Dynamic Event Solutions',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 60,
                'metable_id' => 4,
                'meta_key' => 'og_desc',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'meta_value' => 'Experience some of our best exhibition stands. Discover captivating designs carefully crafted for a memorable display.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 61,
                'metable_id' => 4,
                'meta_key' => 'og_url',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'meta_value' => 'https://www.build.events/portfolio',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 62,
                'metable_id' => 4,
                'meta_key' => 'og_type',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'meta_value' => 'website',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 63,
                'metable_id' => 4,
                'meta_key' => 'pf_banner_anim',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'banner',
                'meta_value' => 'pf-banner-anim.json',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 64,
                'metable_id' => 4,
                'meta_key' => 'pf_banner_title',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'banner',
                'meta_value' => 'Our Projects',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 65,
                'metable_id' => 4,
                'meta_key' => 'pf_featured_title',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'featured',
                'meta_value' => 'Featured',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 66,
                'metable_id' => 4,
                'meta_key' => 'pf_featured_text',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'featured',
                'meta_value' => 'Experience some of our best exhibition stands. Discover captivating designs carefully crafted for a memorable display.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // services
            [
                'id' => 67,
                'metable_id' => 3,
                'meta_key' => 'meta_description',
                'meta_value' => 'Elevate your exhibition with tailored services including booth conceptualisation, branding, project management, construction, and post-event marketing.',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 68,
                'metable_id' => 3,
                'meta_key' => 'meta_keywords',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'meta_value' => 'Exhibition solutions, Booth design, Branding strategy, Event management services, Booth construction planning Concierge support, IPOINT Build, IPOINT INT',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 69,
                'metable_id' => 3,
                'meta_key' => 'og_title',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'meta_value' => 'Services | IPOINT Build | Dynamic Event Solutions',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 70,
                'metable_id' => 3,
                'meta_key' => 'og_desc',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'meta_value' => 'Elevate your exhibition with tailored services including booth conceptualisation, branding, project management, construction, and post-event marketing.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 71,
                'metable_id' => 3,
                'meta_key' => 'og_url',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'meta_value' => 'https://www.build.events/services',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 72,
                'metable_id' => 3,
                'meta_key' => 'og_type',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'meta_value' => 'website',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 73,
                'metable_id' => 3,
                'meta_key' => 'banner',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'banner',
                'meta_value' => 'services-page-banner.svg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 74,
                'metable_id' => 3,
                'meta_key' => 'banner_title',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'banner',
                'meta_value' => 'Elevate Your Exhibition with Our Services',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 75,
                'metable_id' => 3,
                'meta_key' => 'page_title',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'banner',
                'meta_value' => 'Services',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 76,
                'metable_id' => 3,
                'meta_key' => 'clb_title',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'collaborate',
                'meta_value' => 'How we collaborate',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 77,
                'metable_id' => 3,
                'meta_key' => 'clb_text',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'collaborate',
                'meta_value' => 'Our seamless, success-driven solutions ensure your vision becomes an impactful success.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 78,
                'metable_id' => 3,
                'meta_key' => 'ft_cases_title',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'cases',
                'meta_value' => 'Some projects we’re proud of',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 79,
                'metable_id' => 3,
                'meta_key' => 'ft_cases_btn_text',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'cases',
                'meta_value' => 'See all projects',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // contact
            [
                'id' => 80,
                'metable_id' => 5,
                'meta_key' => 'meta_description',
                'meta_value' => 'Connect with IPOINT BUILD for exceptional exhibition experiences. Let’s bring your vision to life together.',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 81,
                'metable_id' => 5,
                'meta_key' => 'meta_keywords',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'meta_value' => 'Exhibition services contact, Get in touch with IPOINT BUILD, Collaborate on events, Contact for booth design, Event planning consultation, Exhibition project inquiry, IPOINT BUILD contact details, Inquiry for collaboration, Event management consultation',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 82,
                'metable_id' => 5,
                'meta_key' => 'og_title',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'meta_value' => 'Contact Us | IPOINT Build | Dynamic Event Solutions',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 83,
                'metable_id' => 5,
                'meta_key' => 'og_desc',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'meta_value' => 'Connect with IPOINT BUILD for exceptional exhibition experiences. Let’s bring your vision to life together.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 84,
                'metable_id' => 5,
                'meta_key' => 'og_url',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'meta_value' => 'https://www.build.events/contact-us',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 85,
                'metable_id' => 5,
                'meta_key' => 'og_type',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'meta_value' => 'website',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 86,
                'metable_id' => 5,
                'meta_key' => 'banner',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'banner',
                'meta_value' => 'contact-page-banner.svg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 87,
                'metable_id' => 5,
                'meta_key' => 'banner_title',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'banner',
                'meta_value' => 'Get in Touch',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 88,
                'metable_id' => 5,
                'meta_key' => 'banner_text',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'banner',
                'meta_value' => 'Let’s Collaborate on Your Next Exhibition! Reach Out for Expert Guidance and Impactful Results.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 89,
                'metable_id' => 5,
                'meta_key' => 'email',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'info',
                'meta_value' => 'info@ipoint.com.mt',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 90,
                'metable_id' => 5,
                'meta_key' => 'address',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'info',
                'meta_value' => '42, Triq L-Amaroz, Mgarr, Malta',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 91,
                'metable_id' => 5,
                'meta_key' => 'fb_link',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'info',
                'meta_value' => 'https://web.facebook.com/Ipoint.Int',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 92,
                'metable_id' => 5,
                'meta_key' => 'insta_link',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'info',
                'meta_value' => 'https://www.instagram.com/ipoint_int/',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 93,
                'metable_id' => 5,
                'meta_key' => 'linkedin_link',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'info',
                'meta_value' => 'https://www.linkedin.com/company/ipoint-int/',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // blog
            [
                'id' => 94,
                'metable_id' => 6,
                'meta_key' => 'meta_description',
                'meta_value' => 'Stay updated with our latest blog articles on Building exhibition booths, tips, and industry insights.',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 95,
                'metable_id' => 6,
                'meta_key' => 'meta_keywords',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'meta_value' => 'Exhibition booth tips, Industry insights, Latest updates Exhibition blog, Building booths, Exhibition industry trends',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 96,
                'metable_id' => 6,
                'meta_key' => 'og_title',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'meta_value' => 'Fresh Updates | IPOINT Build | Dynamic Event Solutions',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 97,
                'metable_id' => 6,
                'meta_key' => 'og_desc',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'meta_value' => 'Stay updated with our latest blog articles on Building exhibition booths, tips, and industry insights.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 98,
                'metable_id' => 6,
                'meta_key' => 'og_url',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'meta_value' => 'https://www.build.events/blog',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 99,
                'metable_id' => 6,
                'meta_key' => 'og_type',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'meta_value' => 'website',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 100,
                'metable_id' => 6,
                'meta_key' => 'banner_title',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'banner',
                'meta_value' => 'Fresh Updates',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 101,
                'metable_id' => 6,
                'meta_key' => 'banner_desc',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'banner',
                'meta_value' => 'Stay updated with our latest blog articles on Building exhibition booths, tips, and industry insights.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 102,
                'metable_id' => 6,
                'meta_key' => 'recent_news_ttile',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'sections',
                'meta_value' => 'Recent News',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 103,
                'metable_id' => 6,
                'meta_key' => 'top_news_ttile',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'sections',
                'meta_value' => 'Top News',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 104,
                'metable_id' => 6,
                'meta_key' => 'other_news_ttile',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'sections',
                'meta_value' => 'Other News',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // privacy policy
            [
                'id' => 105,
                'metable_id' => 7,
                'meta_key' => 'meta_description',
                'meta_value' => 'Discover our comprehensive privacy policy, safeguarding your data and ensuring a secure browsing experience.',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 106,
                'metable_id' => 7,
                'meta_key' => 'meta_keywords',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'meta_value' => 'Privacy Policy',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 107,
                'metable_id' => 7,
                'meta_key' => 'og_title',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'meta_value' => 'Privacy Policy | IPOINT Build | Dynamic Event Solutions',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 108,
                'metable_id' => 7,
                'meta_key' => 'og_desc',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'meta_value' => 'Discover our comprehensive privacy policy, safeguarding your data and ensuring a secure browsing experience.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 109,
                'metable_id' => 7,
                'meta_key' => 'og_url',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'meta_value' => 'https://www.build.events/privacy-policy',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 110,
                'metable_id' => 7,
                'meta_key' => 'og_type',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'meta_value' => 'website',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 111,
                'metable_id' => 7,
                'meta_key' => 'content',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'info',
                'meta_value' => '<h2>Last updated: 12 December 2023</h2>
                <p>IPOINT Build (&quot;us&quot;, &quot;we&quot;, or &quot;our&quot;) operates the website <a href="https://www.build.events/">https://www.build.events/</a> (the &quot;Service&quot;).</p>
                <p>This page informs you of our policies regarding the collection, use, and disclosure of personal data when you use our Service and the choices you have associated with that data.</p>
                <h2>Information Collection and Use</h2>
                <p>We collect several different types of information for various purposes to provide and improve our Service to you.</p>
                <h2>Types of Data Collected</h2>
                <p>Personal Data</p>
                <p>While using our Service, we may ask you to provide us with certain personally identifiable information that can be used to contact or identify you (&quot;Personal Data&quot;). Personally identifiable information may include, but is not limited to:</p>
                <ul>
                    <li>Email address</li>
                    <li>First name and last name</li>
                    <li>Phone number</li>
                    <li>Address, State, Province, ZIP/Postal code, City</li>
                    <li>Cookies and Usage Data</li>
                </ul>
                <p>Usage Data</p>
                <p>We may also collect information on how the Service is accessed and used (&quot;Usage Data&quot;). This Usage Data may include information such as your computer&apos;s Internet Protocol address (e.g., IP address), browser type, browser version, the pages of our Service that you visit, the time and date of your visit, the time spent on those pages, unique device identifiers, and other diagnostic data.</p>
                <h2>Use of Data</h2>
                <p>We use the collected data for various purposes:</p>
                <ul>
                    <li>To provide and maintain our Service</li>
                    <li>To notify you about changes to our Service</li>
                    <li>To allow you to participate in interactive features of our Service when you choose to do so</li>
                    <li>To provide customer support</li>
                    <li>To gather analysis or valuable information so that we can improve our Service</li>
                    <li>To monitor the usage of our Service</li>
                    <li>To detect, prevent, and address technical issues</li>
                </ul>
                <h2>Transfer of Data</h2>
                <p>Your information, including Personal Data, may be transferred to — and maintained on — computers located outside of your state, province, country, or other governmental jurisdiction where the data protection laws may differ from those of your jurisdiction.</p>
                <p>If you are located outside Malta and choose to provide information to us, please note that we transfer the data, including Personal Data, to Malta and process it there.</p>
                <p>Your consent to this Privacy Policy followed by your submission of such information represents your agreement to that transfer.</p>
                <h2>Security of Data</h2>
                <p>The security of your data is important to us, but remember that no method of transmission over the Internet or method of electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your Personal Data, we cannot guarantee its absolute security.</p>
                <h2>Links to Other Sites</h2>
                <p>Our Service may contain links to other sites that are not operated by us. If you click on a third-party link, you will be directed to that third-party&apos;s site. We strongly advise you to review the Privacy Policy of every site you visit.</p>
                <p>We have no control over and assume no responsibility for the content, privacy policies, or practices of any third-party sites or services.</p>
                <h2>Changes to This Privacy Policy</h2>
                <p>We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page.</p>
                <p>We will let you know via email and/or a prominent notice on our Service before the change becomes effective and update the `&quot;Last updated`&quot; date at the top of this Privacy Policy.</p>
                <p>You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.</p>
                <h2>Contact Us</h2>
                <p>If you have any questions about this Privacy Policy, please contact us:</p>
                <ul>
                    <li>By email: <a href="mailto:info@ipoint.com.mt">info@ipoint.com.mt</a></li>
                    <li>By visiting this page on our website: <a href="/contact-us">Contact Us</a></li>
                </ul>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // cookie policy
            [
                'id' => 112,
                'metable_id' => 8,
                'meta_key' => 'meta_description',
                'meta_value' => 'Read our complete cookie policy, safeguarding your data and ensuring a secure browsing experience.',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 113,
                'metable_id' => 8,
                'meta_key' => 'meta_keywords',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'meta_value' => 'Cookie Policy',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 114,
                'metable_id' => 8,
                'meta_key' => 'og_title',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'meta_value' => 'Cookie Policy | IPOINT Build | Dynamic Event Solutions',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 115,
                'metable_id' => 8,
                'meta_key' => 'og_desc',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'meta_value' => 'Read our complete cookie policy, safeguarding your data and ensuring a secure browsing experience.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 116,
                'metable_id' => 8,
                'meta_key' => 'og_url',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'meta_value' => 'https://www.build.events/cookie-policy',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 117,
                'metable_id' => 8,
                'meta_key' => 'og_type',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'meta_value' => 'website',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 118,
                'metable_id' => 8,
                'meta_key' => 'content',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'info',
                'meta_value' => '<h2>Last updated: 12 December 2023</h2>
                <p>IPOINT Build (&quot;us&quot;, &quot;we&quot;, or &quot;our&quot;) uses cookies on <a href="https://www.build.events/">https://www.build.events/</a> (the &quot;Service&quot;). By using the Service, you consent to the use of cookies.</p>
                <h2>Our Cookies Policy Explained</h2>
                <h3>What are cookies?</h3>
                <p>Cookies are small pieces of text sent to your web browser by a website you visit. A cookie file is stored in your web browser and allows the Service or a third party to recognise you and make your next visit easier and the Service more useful to you.</p>
                <h3>How IPOINT Build uses cookies</h3>
                <p>When you use and access the Service, we may place a number of cookie files in your web browser.</p>
                <p>We use cookies for the following purposes:</p>
                <ul>
                    <li>To enable certain functions of the Service: We use both session and persistent cookies on the Service to enable certain functions of the Service and to provide analytics.</li>
                    <li>To store your preferences: We use cookies to store your preferences and various settings.</li>
                    <li>To provide analytics: We use cookies to gather analytics to understand how our visitors use the Service.</li>
                </ul>
                <h3>Third-party cookies</h3>
                <p>In addition to our own cookies, we may also use various third-party cookies to report usage statistics of the Service and deliver advertisements on and through the Service.</p>
                <h3>What are your choices regarding cookies?</h3>
                <p>If you&apos;d like to delete cookies or instruct your web browser to delete or refuse cookies, please visit the help pages of your web browser.</p>
                <p>Please note, however, that if you delete cookies or refuse to accept them, you might not be able to use all the features we offer, you may not be able to store your preferences, and some of our pages might not display properly.</p>
                <h3>Where can you find more information about cookies</h3>
                <p>You can learn more about cookies and the following third-party websites:</p>
                <ul>
                    <li>
                        <a href="https://allaboutcookies.org/" target="_blank">AllAboutCookies</a>
                    </li>
                    <li>
                        <a href="https://thenai.org/" target="_blank">Network Advertising Initiative</a>
                    </li>
                </ul>
                <h2>Changes to This Cookie Policy</h2>
                <p>We may update our Cookie Policy from time to time. We will notify you of any changes by posting the new Cookie Policy on this page.</p>
                <p>We will let you know via email and/or a prominent notice on our Service before the change becomes effective and update the &quot;Last updated&quot; date at the top of this Cookie Policy.</p>
                <p>You are advised to review this Cookie Policy periodically for any changes. Changes to this Cookie Policy are effective when they are posted on this page.</p>
                <h2>Contact Us</h2>
                <p>If you have any questions about this Cookie Policy, please contact us:</p>
                <ul>
                    <li>By email: <a href="mailto:info@ipoint.com.mt">info@ipoint.com.mt</a></li>
                    <li>By visiting this page on our website: <a href="/contact-us">Contact Us</a></li>
                </ul>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // terms & conditions
            [
                'id' => 119,
                'metable_id' => 9,
                'meta_key' => 'meta_description',
                'meta_value' => 'Explore IPOINT Build’s Terms and Conditions, covering our services, subscription offerings, privacy commitments, and more.',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 120,
                'metable_id' => 9,
                'meta_key' => 'meta_keywords',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'meta_value' => 'Terms and Conditions',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 121,
                'metable_id' => 9,
                'meta_key' => 'og_title',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'meta_value' => 'Terms and Conditions | IPOINT Build | Dynamic Event Solutions',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 122,
                'metable_id' => 9,
                'meta_key' => 'og_desc',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'meta_value' => 'Explore IPOINT Build’s Terms and Conditions, covering our services, subscription offerings, privacy commitments, and more.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 123,
                'metable_id' => 9,
                'meta_key' => 'og_url',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'meta_value' => 'https://www.build.events/terms-and-conditions',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 124,
                'metable_id' => 9,
                'meta_key' => 'og_type',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'meta',
                'meta_value' => 'website',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 125,
                'metable_id' => 9,
                'meta_key' => 'content',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'info',
                'meta_value' => '<h2>Last updated: 12 December 2023</h2>
                <p>Welcome to IPOINT Build&apos;s website located at <a href="https://www.build.events/">https://www.build.events/</a> (the &quot;Site&quot;). By accessing or using the Site, you agree to comply with and be bound by the following terms and conditions of use. If you do not agree to these terms, please do not use the Site.</p>
                <h2>1. Services</h2>
                <p>Details about our services can be found on our <a href="/services">Services</a> page. By utilising our services, you agree to abide by the terms outlined on this page.</p>
                <h2>2. Billing and Payment</h2>
                <p>Billing and payment terms will be discussed and agreed upon in person with our clients.</p>
                <h2>3. Subscription Services</h2>
                <p>We offer subscription services, such as newsletters. Users can subscribe to our newsletters, and if they wish to unsubscribe, they can contact us through the provided channels.</p>
                <h2>4. Refund and Cancellation</h2>
                <p>Refund and cancellation policies will be discussed and agreed upon in person with our clients.</p>
                <h2>5. User Accounts and User-Generated Content</h2>
                <p>Our website does not require user accounts, and we do not host user-generated content (UGC) on our platform.</p>
                <h2>6. Limited Company</h2>
                <p>IPOINT Build is a limited company.</p>
                <h2>7. Privacy and Data Protection</h2>
                <p>We are committed to keeping user data private. Our privacy practices are outlined in our <a href="/privacy-policy">Privacy Policy</a>.</p>
                <h2>8. Disclaimers and Limitations of Liability</h2>
                <p>Our website and services are provided on an &quot;as is&quot; and &quot;as available&quot; basis. We disclaim all warranties of any kind, whether express or implied. To the fullest extent permitted by law, we shall not be liable for any indirect, incidental, special, consequential, or punitive damages, or any loss of profits or revenues, whether incurred directly or indirectly.</p>
                <h2>9. Governing Law</h2>
                <p>These Terms and Conditions are governed by and construed in accordance with the laws of Malta.</p>
                <h2>10. Contact Information</h2>
                <p>If you have any questions about these Terms and Conditions, please contact us:</p>
                <ul>
                    <li>By email: <a href="mailto:info@ipoint.com.mt">info@ipoint.com.mt</a></li>
                    <li>By visiting this page on our website: <a href="/contact-us">Contact Us</a></li>
                </ul>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 126,
                'metable_id' => 7,
                'meta_key' => 'title',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'info',
                'meta_value' => 'Privacy Policy',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 127,
                'metable_id' => 9,
                'meta_key' => 'title',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'info',
                'meta_value' => 'Terms and Conditions',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 128,
                'metable_id' => 8,
                'meta_key' => 'title',
                'metable_type' => 'App\Models\Dashboard\Pages',
                'subtype'   => 'info',
                'meta_value' => 'Cookie Policy',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        Meta::insert($data);
    }
}
