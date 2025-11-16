import { Directive } from "vue"

export type JaggedDirective = Directive<SVGElement>

declare module 'vue' {
  export interface ComponentCustomProperties {
    vJagged: JaggedDirective
  }
}

export default {
    mounted(el) {
        el.setAttribute("filter", "url(#jagged-svg)")
    }
} satisfies JaggedDirective