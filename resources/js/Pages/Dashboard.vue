<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import Profile from "@/Pages/Profile/Profile.vue";
import { Head } from "@inertiajs/vue3";
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                Dashboard
            </h2>
        </template>

        <Profile></Profile>
    </AuthenticatedLayout>
</template>
