<div v-if="facet.name" class="col-12 side-bar-filter-card">
    <div class="h3 title py-0">${ facetName }</div>

    <div v-if="facet.type === 'price'">
        <item-filter-price></item-filter-price>
    </div>

    <div v-else class="form-check-wrapper" v-for="value in facets" :key="value.id">
        <div class="form-check mb-0 pl-0">
            <input :id="'option-' + value.id" class="form-check-input d-none" type="checkbox" :checked="isSelected(value.id)" @change="updateFacet(value)" :disabled="isLoading || value.count <= 0">
            <label :for="'option-' + value.id" class="form-check-label" :class="[paddingClasses, isSelected(value.id) ? 'bg-appearance' : '']" :style="paddingInlineStyles">
                <div class="d-flex">
                    <span class="flex-grow-1">${ value.name }</span>
                    <div class="filter-badge">${ value.count }</div>
                </div>
            </label>
        </div>
    </div>
</div>
