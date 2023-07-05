module.exports = {
    build: {
      outDir: 'public/assets', // Output directory for the built files
      manifest: true, // Generate manifest file
      rollupOptions: {
        // Add any custom Rollup options here
      },
    },
    server: {
      proxy: {
        '/api': 'http://localhost:8000', // Proxy API requests to Laravel development server
      },
    },
    // Additional Vite configuration options...
  };
  