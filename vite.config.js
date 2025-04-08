import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'
import react from '@vitejs/plugin-react'

// Export the Vite config
export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/js/app.jsx'],  // Ensure the path to your app.jsx is correct
      refresh: true,
    }),
    react(),  // Add React support
  ],
})
