var cacheName = 'SAL-v1';
var urlsToCache = [
  '/sal/public/registerSW.js',
  '/sal/public/manifest.json',
  '/sal/public/styles/main.css',
  '/sal/public/styles/addAnime.css',
  '/sal/public/styles/deleteAnime.css',
  '/sal/public/styles/login.css',
  '/index.php',
  '/sal/public/addAnime.php',
  '/sal/public/deleteAnime.php',
  '/sal/public/check.php',
  '/sal/public/db.php',
  '/sal/public/footer.php',
  '/sal/public/header.php',
  '/sal/public/readAnimelist.php',
  '/sal/public/functions.php',
  '/sal/public/login.php',
  '/sal/public/logout.php',
  '/sal/public/validate.php',
  '/sal/public/registerUser.php'
];

self.addEventListener('install', (e) => {
  self.skipWaiting();
  console.log(`[Service Worker] Install - ${cacheName}`);
  e.waitUntil((async () => {
      const cache = await caches.open(cacheName);
      console.log('[Service Worker] Caching all: app shell and content');
      await cache.addAll(urlsToCache);
      console.log('[Service Worker] Downloaded: app shell and content');
  })());
});

self.addEventListener('fetch', (e) => {
  e.respondWith((async () => {
      const r = await caches.match(e.request, { ignoreSearch: true });
      //console.log([Service Worker] Fetching resource: ${e.request.url});
      if (r) { return r; }
      const response = await fetch(e.request);
      const cache = await caches.open(cacheName);
      if (e.request.method !== "POST") {
          //console.log([Service Worker] Caching new resource: ${e.request.url});
          cache.put(e.request, response.clone());
      }
      return response;
  })());
});

self.addEventListener('activate', (e) => {
  console.log(`[Service Worker] ${cacheName} now ready to handle fetches!`);
});