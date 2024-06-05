@extends('template')
@section('content')
    <section class="h-[80vh] flex items-center justify-center">
        <div class="w-1/2 h-full py-2 px-5 text-center flex flex-col gap-2 bg-zinc-950 text-white justify-center">
            <h1 class="text-4xl font-bold">About Us</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem qui commodi animi quia aliquam
                expedita eius hic illum vitae repellendus dolorum libero magnam id provident at ut placeat, eum ab
                fugiat! Nemo!</p>
        </div>
        <div class="w-1/2 h-full bg-slate-50"></div>
    </section>
    <section class="flex gap-5 mt-28 justify-center">
        <div class="w-1/2 flex flex-col gap-3 p-4">
            <h2 class="font-bold text-3xl">About Us</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi eveniet dolorem tempora optio laboriosam
                illum architecto odit? Molestias quaerat, impedit distinctio vitae quos odio quis laboriosam. Corporis culpa
                esse doloremque ipsum exercitationem.</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi eveniet dolorem tempora optio laboriosam
                illum architecto odit? Molestias quaerat, impedit distinctio vitae quos odio quis laboriosam. Corporis culpa
                esse doloremque ipsum exercitationem.</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi eveniet dolorem tempora optio laboriosam
                illum architecto odit? Molestias quaerat, impedit distinctio vitae quos odio quis laboriosam. Corporis culpa
                esse doloremque ipsum exercitationem.</p>
        </div>
        <div class="w-1/2 flex flex-col gap-3 p-4">
            <h2 class="font-bold text-3xl">Our Vission</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi eveniet dolorem tempora optio laboriosam
                illum architecto odit? Molestias quaerat, impedit distinctio vitae quos odio quis laboriosam. Corporis culpa
                esse doloremque ipsum exercitationem.</p>
            <h2 class="font-bold text-3xl">Our Mission</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi eveniet dolorem tempora optio laboriosam
                illum architecto odit? Molestias quaerat, impedit distinctio vitae quos odio quis laboriosam. Corporis culpa
                esse doloremque ipsum exercitationem.</p>
        </div>
    </section>
    <section class="flex gap-5 mt-28 justify-center">
        <div class="w-2/5 flex flex-col gap-3 p-4 relative">
            <img src="https://placehold.co/600x400" alt="" class="w-full">
            <div class="w-full flex overflow-hidden">
                <div class="flex">
                    <img src="https://placehold.co/600x700" alt="" class="w-[20%] border-2 border-black">
                    <img src="https://placehold.co/600x700" alt="" class="w-[20%]">
                    <img src="https://placehold.co/600x700" alt="" class="w-[20%]">
                    <img src="https://placehold.co/600x700" alt="" class="w-[20%]">
                    <img src="https://placehold.co/600x700" alt="" class="w-[20%]">
                    <img src="https://placehold.co/600x700" alt="" class="w-[20%]">
                </div>
            </div>
        </div>
        <div class="w-3/5 flex flex-col gap-3 p-4">
            <h2 class="font-bold text-3xl">Working At Squad!</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi eveniet dolorem tempora optio laboriosam
                illum architecto odit? Molestias quaerat, impedit distinctio vitae quos odio quis laboriosam. Corporis culpa
                esse doloremque ipsum exercitationem.</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi eveniet dolorem tempora optio laboriosam
                illum architecto odit? Molestias quaerat, impedit distinctio vitae quos odio quis laboriosam. Corporis culpa
                esse doloremque ipsum exercitationem.</p>
        </div>
    </section>
    <section class="flex gap-5 mt-28">
        <div class="w-1/2 flex gap-5 p-4 flex-col">
            <h2 class="font-bold text-3xl">Testimonials</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis animi a officiis delectus architecto autem?
                Rem exercitationem deleniti ad, cumque obcaecati tempore repudiandae deserunt qui reiciendis doloribus amet
                recusandae distinctio rerum aliquam?</p>
        </div>
        <div class="w-1/2 flex flex-col gap-5 p-4">
            <div
                class="w-[90%] shadow-md rounded-md flex flex-col gap-3 items-center justify-center text-center px-5 py-2 m-auto">
                <img src="https://placehold.co/200x200" alt="" class="w-[50px] rounded-3xl">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis dolorum dicta maxime aspernatur enim?
                    In repellendus distinctio earum quo similique?</p>
                <span>Customer Name</span>
            </div>
            <div class="w-full flex gap-5 py-3 items-center justify-center">
                <div class="p-1 rounded-3xl bg-zinc-950"></div>
                <div class="p-1 rounded-3xl bg-zinc-950"></div>
                <div class="p-1 rounded-3xl bg-zinc-950"></div>
            </div>
        </div>
    </section>
@endsection
