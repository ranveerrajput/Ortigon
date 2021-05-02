<template>
  <div class="container">
    <div class="text-center">
      <b-button variant="primary">
        List <b-badge variant="light">{{countItems}}</b-badge>
      </b-button>
    </div>
    <b-form>
      <b-form-group id="input-group-1" label="Item names:" label-for="input-1">
        <b-form-input
          id="input-1"
          type="text"
          v-model="name"
          placeholder="Enter items"
          required
        ></b-form-input>
      </b-form-group>
      <b-button variant="outline-primary" @click="addItem()">Add+</b-button>
    </b-form>

    <b-list-group class="mt-5">
      <b-list-group-item v-for="(item, index) in items" v-bind:key="index">
        {{ item }}
      </b-list-group-item>
    </b-list-group>
  </div>
</template>

<script>
export default {
  name: "List",
  data() {
    return {
      name: "",
      items: [],
    };
  },

  computed: {
    check() {
      if (this.name == "") {
        return true;
      } else {
        return false;
      }
    },
    countItems() {
      return this.items.length;
    },
  },

  methods: {
    addItem() {
      alert(this.name);
      this.items.push(this.name);
    },
  },
};
</script>

<style scoped></style>
