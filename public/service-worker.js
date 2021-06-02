var cacheName = 'SAL-v1';
var urlsToCache = [
  '/public/registerSW.js',
  '/public/manifest.json',
  '/public/styles/main.css',
  '/public/styles/addAnime.css',
  '/public/styles/deleteAnime.css',
  '/public/styles/login.css',
  '/index.php',
  '/public/addAnime.php',
  '/public/deleteAnime.php',
  '/public/check.php',
  '/public/db.php',
  '/public/footer.php',
  '/public/header.php',
  '/public/readAnimelist.php',
  '/public/functions.php',
  '/public/login.php',
  '/public/logout.php',
  '/public/validate.php',
  '/public/registerUser.php'
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