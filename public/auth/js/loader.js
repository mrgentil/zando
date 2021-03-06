class SpinningDots extends HTMLElement {
    constructor() {
        super()
        this.root = this.attachShadow({ mode: 'open' })
    }

    connectedCallback() {
        const styles = window.getComputedStyle(this)
        const width = this.intFromPx(styles.width, 40)
        const strokeWidth = this.intFromPx(styles.strokeWidth, (4 / 28) * width, 1)
        const circles = this.intFromPx(this.getAttribute('dots'), 8)
        this.root.innerHTML = `<div>
    ${this.buildStyles(width, circles, strokeWidth)}
    ${this.buildCircles(width, circles, strokeWidth / 2)}
    ${this.buildTrail(width, strokeWidth)}
    </div>`
    }

    disconnectedCallback() {
        this.root.innerHTML = ''
    }

    /**
     * Builds a SVG with n circles equally spaced around a circle
     * @param {number} w canvas width
     * @param {number} n circles count
     * @param {number} r circles radius
     * @return {string}
     */
    buildCircles(w, n, r) {
        const circleRadius = w / 2 - r
        let dom = `<svg class="circles" width="${w}" height="${w}" viewBox="0 0 ${w} ${w}" fill="none" xmlns="http://www.w3.org/2000/svg">`
        for (let i = 0; i < n; i++) {
            const a = (Math.PI / (n / 2)) * i
            const x = circleRadius * Math.sin(a) + w / 2
            const y = circleRadius * Math.cos(a) + w / 2
            dom += `<circle cx="${x}" cy="${y}" r="${r}" fill="#1570B7"/>`
        }
        return dom + `</svg>`
    }

    /**
     * Builds a SVG circle
     * @param {number} w canvas width
     * @param {number} stroke stroke width
     * @return {string}
     */
    buildTrail(w, stroke) {
        return `<svg class="halo" width="${w}" height="${w}" viewBox="0 0 ${w} ${w}" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="${w / 2}" cy="${w / 2}" r="${w / 2 -
        stroke / 2}" stroke-width="${stroke}" stroke-linecap="round" stroke="#1570B7"/>
</svg>`
    }

    /**
     * Build the style
     * @param {number} w canvas width
     * @param {number} n number of section for the trail
     * @param {number} stroke size of the stroke
     * @return {string}
     */
    buildStyles(w, n, stroke) {
        const offset = Math.PI * (w - stroke)
        return `<style>
      :host {
        display: inline-block;
      }
      div {
        animation: fadeIn .4s cubic-bezier(.1,.6,.3,1);
        width: ${w}px;
        height: ${w}px;
        position: absolute;
        z-index: 1;
        background: #FFF;
        height: 100%;
        width: 100%;
      }
      svg {
        position: absolute;
        top: 0;
        left: 0;
      }
      .circles {
        animation: spin 16s linear infinite;
      }
      .halo {
        animation: spin2 1.6s cubic-bezier(.5,.15,.5,.85)  infinite;
      }
      .halo circle {
        stroke-dasharray: ${offset};
        stroke-dashoffset: ${offset + offset / n};
        animation: trail 1.6s cubic-bezier(.5,.15,.5,.85)   infinite;
      }
      @keyframes spin {
          from {transform: rotate(0deg); }
          to {transform: rotate(360deg); }
      }
      @keyframes spin2 {
          from {transform: rotate(0deg); }
          to {transform: rotate(720deg); }
      }
      @keyframes trail {
        0% { stroke-dashoffset: ${offset + offset / n}; }
        50% { stroke-dashoffset: ${offset + (2.5 * offset) / n}; }
        100% { stroke-dashoffset: ${offset + offset / n}; }
      }
      @keyframes fadeIn {
        from { opacity: 0; transform: scale(.1) }
        to { opacity: 1; transform: scale(1) }
      }
    </style>`
    }

    /**
     * Extract an int from a string
     * @param {string} value "20px" "auto"
     * @param {number} initial default value
     * @param {number} min assign default value if the value is under this threshold
     */
    intFromPx(value, initial, min = 0) {
        if (value === null || value === undefined) {
            return initial
        }
        value = parseInt(value.replace('px', ''), 10)
        if (value > min) {
            return value
        }
        return initial
    }
}

try {
    customElements.define('spinning-dots', SpinningDots)
} catch (e) {
    if (e instanceof DOMException) {
        console.error('DOMException : ' + e.message)
    } else {
        throw e
    }
}

export default SpinningDots
