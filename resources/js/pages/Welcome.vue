<script setup>
const preferencesUrl = '/preferences'
</script>


<template>
  <h1>Welcome Home</h1>

  <a :href="preferencesUrl" class="btn btn-primary">
    Go Preference
  </a>
</template>
