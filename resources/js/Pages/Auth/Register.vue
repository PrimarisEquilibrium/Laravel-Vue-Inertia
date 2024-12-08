<script setup>
import { reactive } from "vue";

const form = reactive({
    name: null,
    email: null,
    password: null,
    password_confirmation: null,
});

const submit = () => {
    console.log(form);
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
        </div>

        <div class="mb-6">
            <label>Email</label>
            <input type="text" v-model="form.email" />
        </div>

        <div class="mb-6">
            <label>Password</label>
            <input type="text" v-model="form.password" />
        </div>

        <div class="mb-6">
            <label>Confirm Password</label>
            <input type="text" v-model="form.password_confirmation" />
        </div>

        <div>
            <p class="text-slate-600 mb-2">
                Already a user?
                <a href="#" class="text-link">Login</a>
            </p>
            <button class="primary-btn">Register</button>
        </div>
    </form>
</template>
