<template>
  <section class="k-headline-section">
    <k-headline class="h2">{{ label }}</k-headline>
    <footer v-if="help" class="k-section-footer">
      <k-text class="k-help" :html="help" />
    </footer>
  </section>
</template>

<script>
export default {
  data() {
    return {
      label: null,
      help: null
    }
  },
  created() {
    this.load().then(response => {
      this.label = response.label;
      this.help = response.help;
    });
  }
};
</script>

<style>
.k-headline-section {
  padding-block-start: var(--spacing-12);
  padding-block-end: var(--spacing-8);

  &:first-child {
    padding-block-start: 0;
  }
}

.k-headline-section .k-headline {
  font-weight: var(--font-normal);
  margin: 0;
}

.k-headline-section .k-section-footer {
  margin-top: var(--spacing-2);
}
</style>