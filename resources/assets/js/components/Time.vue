<template>
  <div>name</div>
</template>
<script>
  import moment from 'moment'
  export default {
    name: 'Time-Component',
    data () {
      return {
        todayDate: moment().format('MMMM Do YYYY, h:mm:ss a')
      }
    }
  }
</script>