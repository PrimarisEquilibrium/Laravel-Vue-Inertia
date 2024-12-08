<script setup>
import { reactive } from "vue";
import { router, useForm } from "@inertiajs/vue3";

// Using the VueJS router
// const form = reactive({
//     name: null,
//     email: null,
//     password: null,
//     password_confirmation: null,
// });
// const submit = () => {
//     router.post("/register", form);
// };

const form = useForm({
    name: null,
    email: null,
    password: null,
    password_confirmation: null,
});

const submit = () => {
    form.post(route("register"), {
        onError: () => {
            form.reset("password", "password_confirmation");
        },
    });
};
</script>

<template>
    <Head title="Register" />

    <h1 class="title">Register a new account</h1>

    <div class="w-2/4 mx-auto"></div>

    <form @submit.prevent="submit">
        <div class="mb-6">
            <label>Name</label>
            <input type="text" v-model="form.name" />
            <!-- Displays the form error if the name field is invalid -->
            <small>{{ form.errors.name }}</small>
        </div>

        <div class="mb-6">
            <label>Email</label>
            <input type="text" v-model="form.email" />
            <small>{{ form.errors.email }}</small>
        </div>

        <div class="mb-6">
            <label>Password</label>
            <input type="text" v-model="form.password" />
            <small>{{ form.errors.password }}</small>
        </div>

        <div class="mb-6">
            <label>Confirm Password</label>
            <input type="text" v-model="form.password_confirmation" />
            <small>{{ form.errors.password_confirmation }}</small>
        </div>

        <div>
            <p class="text-slate-600 mb-2">
                Already a user?
                <a href="#" class="text-link">Login</a>
            </p>
            <button class="primary-btn" :disabled="form.processing">
                Register
            </button>
        </div>
    </form>
</template>
