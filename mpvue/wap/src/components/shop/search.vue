<template>
  <div class="search">
    <input type="text" class="search-input" placeholder="输入关键字搜索商品" placeholder-style="color:#aaa" v-model="keyText" @keyup.13="startSearch">
  </div>
</template>

<script>
import {host} from '@/utils'
export default {
  props: ['type'],
  data () {
    return {
      keyText: ''
    }
  },
  methods: {
    startSearch(e) {
      this.$router.push({ name: 'lists', params: {key: this.keyText}})
    },
  }
}
</script>

<style lang="scss" scoped>
.search {
    background: url('~images/icon-search.png') no-repeat -10px -10px;
    background-size: 34px;
    background-position: 10px;
    height: 35px;
    border: 1px solid $red;
    border-radius: 30px;
    overflow: hidden;
    &-input {
      width: 100%;
      margin-left:50px;
      height:35px;
      font-size: 14px;
      border: 0;
      background: transparent;
    }
}

</style>
