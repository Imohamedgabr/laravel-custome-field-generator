<template>
    <div>
        <h1>Form</h1>
        <vue-form-generator
          :schema="schema"
          :model="model"
        />
        
  </div>
</template>

<script>
    export default {
        props: ['fields'],
  data() {
    return {
      schema : {
        fields: JSON.parse(this.fields)
      },
      model: {},
    };
  },
};
</script>

<style>
    .space{
        margin-bottom:20px;
    }
</style>