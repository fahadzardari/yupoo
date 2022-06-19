<template>
    <Link :href="item_details_url">
        <div class="my-2 text-center rounded-md shadow-lg card">
            <div class="relative">
                <p
                    class="absolute bottom-0 right-0 float-right font-bold text-white"
                >
                    ({{ total_images_in_album }})
                </p>
                <img :src="url" class="w-full h-40 rounded-t-md" alt="" />
                
            </div>
            <p for="cat" class="p-2 text-center">{{ name }}</p>
        </div>
    </Link>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
    components: {
        Link,
    },
    data() {
        return {};
    },
    props: {
        url: {
            type: String,
            default: " ",
        },
        item_details_url: {
            type: String,
            default: " ",
        },
        total_images_in_album: {
            type: Number,
            default: 0,
        },
        name: {
            type: String,
            default: "default.jpg",
        },
    },
};
</script>
