<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Checkbox from '@/Components/Checkbox.vue';
import DangerButton from '@/Components/Buttons/DangerButton.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import Modal from '@/Components/Modal.vue';
import NavLink from '@/Components/NavLink.vue';
import PrimaryButton from '@/Components/Buttons/PrimaryButton.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import SecondaryButton from '@/Components/Buttons/SecondaryButton.vue';
import TextInput from '@/Components/TextInput.vue';

const message = ref('Hello world!');
const checked = ref([]);
const show = ref();

const trigger = () => {
    show.value = !show.value;
};

</script>

<template>

    <pre class="text-white">{{ $inertia }}</pre>

    <NavLink href="/play"
             :active="route().current('play')">
        Play
    </NavLink>
    <NavLink href="/"
             :active="route().current('/')">
        Welcome
    </NavLink>

    <ResponsiveNavLink href="/play"
                       :active="route().current('play')">
        Play</ResponsiveNavLink>
    <ResponsiveNavLink href="/play"
                       :active="route().current('/')">
        Welcome</ResponsiveNavLink>

    <ApplicationLogo class="h-12 w-12" />
    <TextInput v-model.trim="message"
               autofocus />
    <div>
        {{ message }}
    </div>

    <div>
        {{ `Checked: ${checked}` }}<br>
    </div>

    <pre>
        {{ checked }}
    </pre>

    <Checkbox value="a"
    v-model:checked="checked" />

    <PrimaryButton @click="trigger">Save</PrimaryButton>
    <SecondaryButton @click="trigger">Cancel</SecondaryButton>
    <DangerButton @click="trigger">Modal</DangerButton>

    <div class="hidden sm:ms-6 sm:flex sm:items-center">
        <!-- Settings Dropdown -->
        <div class="relative ms-3">
            <Dropdown align="right"
                      width="150">
                <template #trigger>
                    <button>Dropdown</button>
                </template>

                <template #content>
                    <div class="py-1 bg-gray-500">
                        <DropdownLink href="#"
                                      class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Link 1
                        </DropdownLink>
                        <DropdownLink href="#"
                                      class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Link 2
                        </DropdownLink>
                        <DropdownLink href="#"
                                      class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Link 3
                        </DropdownLink>
                    </div>
                </template>
            </Dropdown>
        </div>
    </div>

    <InputLabel for="email"
                value="Email" />
    <InputError class="mt-2"
                :message="message" />

    <Modal :show="show"
           @close="trigger">
    <Checkbox value="a"
              v-model:checked="checked" />
    <Checkbox value="b"
              v-model:checked="checked" />
    </Modal>

</template>
