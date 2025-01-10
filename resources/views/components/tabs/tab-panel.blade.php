<!-- Tabs -->
<div
    x-data="{
        selectedId: null,
        init() {
            // Set the first available tab on the page on page load.
            this.$nextTick(() => this.select(this.$id('tab', 1)))
        },
        select(id) {
            this.selectedId = id
        },
        isSelected(id) {
            return this.selectedId === id
        },
        whichChild(el, parent) {
            return Array.from(parent.children).indexOf(el) + 1
        }
    }"
    x-id="['tab']"
    class="space-y-6 mx-auto w-full"
>
    <!-- Tab List -->
    <ul
        x-ref="tablist"
        @keydown.right.prevent.stop="$focus.wrap().next()"
        @keydown.home.prevent.stop="$focus.first()"
        @keydown.page-up.prevent.stop="$focus.first()"
        @keydown.left.prevent.stop="$focus.wrap().prev()"
        @keydown.end.prevent.stop="$focus.last()"
        @keydown.page-down.prevent.stop="$focus.last()"
        role="tablist"
        class="box-tab flex justify-start py-8 px-4"
    >
        <!-- Tab -->

        @if(isset($tabs))
            {{$tabs}}
        @endif

    </ul>
    <div class="box-tab shadow-md px-4"></div>

    <!-- Panels -->
    <div role="tabpanel" class="box-tab text-xs font-lex px-5">

        <!-- Content -->

        @if(isset($content))
            {{$content}}
        @endif

    </div>
</div>
