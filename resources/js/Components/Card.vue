<template>
    <Link :href="item_details_url">
        <div class="card shadow-lg my-2 rounded-md text-center">
            <div class="relative">
                <p
                    class="absolute float-right bottom-0 right-0 text-white font-bold"
                >
                    ({{ total_images_in_album }})
                </p>
                <img :src="url" class="w-full h-40 rounded-t-md" alt="" />
            </div>
            <p for="cat" class="text-center p-2">{{ name }}</p>
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
