# Run POSTCSS

# Running postcss

Run in VAGRANT. (postcss is installed there.)

```bash
cd /wp-content/themes/wp-theme__pulse-londonparkour/src/assets/css/file_scans/files
rm -Rf *.html
cd ..
./fetch.sh
cd ..
NODE_ENV=production postcss ./tailwind.css --config postcss.config.js --output ./style.css
```

For debugging:

```bash
NODE_DEBUG=cluster,net,http,fs,tls,module,timers NODE_ENV=production node /usr/bin/postcss ./tailwind.css --config postcss.config.js --output ./style.css
```