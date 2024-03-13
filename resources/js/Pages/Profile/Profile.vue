<template>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div
                class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg"
            >
                <div class="p-6 text-center text-gray-900 dark:text-gray-100">
                    <h1 class="font-bold text-3x1">This is my profile</h1>
                </div>

                <div class="p-6 text-gray-900 dark:text-gray-100">
                    I am {{ $page.props.auth.user.name }}
                </div>

                <div class="p-6 text-gray-900 dark:text-gray-100">
                    My email is {{ $page.props.auth.user.email }}
                </div>

                <div class="p-6 text-gray-900 dark:text-gray-100">
                    My ign is {{ $page.props.auth.user.ign }}
                </div>
            </div>
        </div>
    </div>
</template>
