<?php get_header(); ?>

<main class="h-full">
    <div class="flex w-full justify-center items-center space-x-10 my-20">
        <div class="w-1/12 rounded-full hover:shadow-2xl transition">
            <img
                class="rounded-full w-full"
                src="<?php echo get_template_directory_uri() ?>/assets/img/1.jfif" 
                alt="imagen de perfil de Gio"
            >
        </div>
        <div class="w-6/12">
            <p class="select-none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem iure pariatur autem repudiandae, a dolores, temporibus ipsum vero ut nulla distinctio rem consequatur? Laboriosam suscipit, ullam placeat possimus perferendis veniam? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam, debitis quisquam corrupti animi quos quae explicabo nostrum. Aut recusandae atque porro ipsam cumque minus quod, cum ipsa repudiandae voluptas officiis?</p>
        </div>
    </div>
    <div class="flex h-52 space-x-10 mt-10 w-8/12 mx-auto">
        <div class="w-full h-full border-2 hover:shadow-lg transition rounded-b-lg">
            <img class="h-4/5 w-full" src="<?php echo get_template_directory_uri()?>/assets/img/2.jpg" alt="">
            <p class="h-1/5 text-center leading-9 select-none">Herramienta</p>
        </div>
        <div class="w-full h-full border-2 hover:shadow-lg transition rounded-b-lg">
            <img class="h-4/5 w-full" src="<?php echo get_template_directory_uri()?>/assets/img/3.jpg" alt="">
            <p class="h-1/5 text-center leading-9 select-none">Herramienta</p>
        </div>
        <div class="w-full h-full border-2 hover:shadow-lg transition rounded-b-lg">
            <img class="h-4/5 w-full" src="<?php echo get_template_directory_uri()?>/assets/img/4.jpg" alt="">
            <p class="h-1/5 text-center leading-9 select-none">Herramienta</p>
        </div>
        <div class="w-full h-full border-2 hover:shadow-lg transition rounded-b-lg">
            <img class="h-4/5 w-full" src="<?php echo get_template_directory_uri()?>/assets/img/5.jpg" alt="">
            <p class="h-1/5 text-center leading-9 select-none">Herramienta</p>
        </div>
    </div>
    <div class="flex w-full justify-center mt-10 text-justify">
        <p class="w-8/12 select-none">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum dicta facilis praesentium fuga dolor in, distinctio rerum possimus eligendi vitae animi suscipit, assumenda eius exercitationem voluptatibus itaque. Iusto, eligendi sunt!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo at porro esse molestiae animi natus dolore qui, suscipit libero eius perspiciatis sapiente nesciunt adipisci blanditiis id a ipsa perferendis error.
        </p>
    </div>
</main>

<?php get_footer(); ?>