<template>
  <div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Tarefas</h1>
    <div v-for="task in tasks" :key="task.id"
         :class="['p-4 border rounded mb-2', task.is_notified ? 'bg-green-100' : 'bg-white']">
      <h2 class="text-xl font-semibold">{{ task.title }}</h2>
      <p>{{ task.description }}</p>
      <small>Agendada para: {{ formatDate(task.scheduled_to) }}</small>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import axios from 'axios'

const tasks = ref([])

const fetchTasks = async () => {
  const res = await axios.get('http://localhost:8000/api/tasks')
  tasks.value = res.data
}

onMounted(fetchTasks)

const formatDate = (dateStr) => new Date(dateStr).toLocaleString()
</script>
