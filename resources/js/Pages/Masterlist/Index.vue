<script setup>
import SidebarLayout from '@/Layouts/SidebarLayout.vue';
import BreezeButton from '@/Components/Button.vue';
import { Link } from '@inertiajs/vue3';
import { useForm } from '@inertiajs/vue3'

const props = defineProps({
    masterlists: {
        type: Object,
        default: () => ({}),
    },
});
const form = useForm();

function destroy(id) {
    if (confirm("Are you sure you want to Delete")) {
        form.delete(route('masterlists.destroy', id));
    }
}
</script>

<template>

    <SidebarLayout>
        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    v-if="$page.props.flash.message"
                    class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                    role="alert"
                >
                    <span class="font-medium">
                        {{ $page.props.flash.message }}
                    </span>
                </div>
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                       <div class="mb-2">
                            <Link :href="route('masterlist.create')">
                                Add Blog</Link
                            >
                        </div>
                         <div
                            class="relative overflow-x-auto shadow-md sm:rounded-lg"
                        >
                            <table
                                class="w-full text-sm text-left text-gray-500 dark:text-gray-400"
                            >
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
                                >
                                    <tr>
                                        <th scope="col" class="px-6 py-3">#</th>
                                        <th scope="col" class="px-6 py-3">
                                            Title
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Slug
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Edit
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Delete
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        v-for="masterlist in masterlists"
                                        :key="masterlist.id"
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                                    >
                                        <th
                                            scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap"
                                        >
                                            {{ masterlist.emp_num }}
                                        </th>
                                        <th
                                            scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap"
                                        >
                                            {{ masterlist.lname }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ blog.fname }}
                                        </td>


                                        <td class="px-6 py-4">
                                            <Link
                                                :href="
                                                    route(
                                                        'masterlist.edit',
                                                        blog.id
                                                    )
                                                "
                                               class="px-4 py-2 text-white bg-blue-600 rounded-lg" >Edit</Link
                                            >
                                        </td>
                                        <td class="px-6 py-4">
                                            <BreezeButton
                                                class="bg-red-700"
                                                @click="destroy(blog.id)"
                                            >
                                                Delete
                                            </BreezeButton>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </SidebarLayout>
</template>