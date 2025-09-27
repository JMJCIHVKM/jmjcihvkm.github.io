<footer id="footer" style="background: rgba(0, 0, 0, 0.98); color: #423feeff; padding: 2rem 0; text-align: center; width: 100%; position: relative; z-index: 10;">
  <div style="display: flex; flex-direction: column; align-items: center; gap: 1.2rem;">
    <div id="footer-icons" style="display: flex; gap: 2rem; justify-content: center; align-items: center;">
      <a href="https://facebook.com/" target="_blank" class="footer-icon" style="display: flex; align-items: center; color: #0940b8ff; text-decoration: none; font-size: 1.2rem;">
        <svg class="icon-svg" width="28" height="28" viewBox="0 0 32 32" fill="currentColor"><path d="M29 0H3C1.3 0 0 1.3 0 3v26c0 1.7 1.3 3 3 3h13V20h-4v-5h4v-3.7C16 7.6 18.4 6 21.2 6c1.2 0 2.5.1 2.8.1v4h-1.9c-1.5 0-1.8.7-1.8 1.7V15h4.6l-.6 5h-4v12h7c1.7 0 3-1.3 3-3V3c0-1.7-1.3-3-3-3z"/></svg>
        <span class="footer-label">Facebook</span>
      </a>
      <a href="https://x.com/" target="_blank" class="footer-icon" style="display: flex; align-items: center; color: #837d7dff; text-decoration: none; font-size: 1.2rem;">
        <svg class="icon-svg" width="28" height="28" viewBox="0 0 32 32" fill="currentColor"><path d="M19.6 13.3L29.2 2h-2.2l-8.1 9.2L12 2H3l10.2 14.5L3 30h2.2l8.7-9.9 7.2 9.9h9l-11.5-16.2zm-3.1 3.5l1-.1 8.2 11.2h-3.2l-6-8.1zm-1.2-1.6l-9.1-12.7h3.2l7.1 9.9zm1.6 2.1l-1 .1-8.5 9.7h3.2l6.3-7.9z"/></svg>
        <span class="footer-label">X</span>
      </a>
      <a href="https://wa.me/254712782311" target="_blank" class="footer-icon" style="display: flex; align-items: center; color: #3fee3fff; text-decoration: none; font-size: 1.2rem;">
        <svg class="icon-svg" width="28" height="28" viewBox="0 0 32 32" fill="currentColor"><path d="M16 0C7.2 0 0 7.2 0 16c0 3.1.9 6.1 2.6 8.7L0 32l7.5-2.5C10.1 31.1 13 32 16 32c8.8 0 16-7.2 16-16S24.8 0 16 0zm0 29c-2.7 0-5.3-.8-7.5-2.3l-.5-.3-4.5 1.5 1.5-4.3-.3-.5C3.8 21.3 3 18.7 3 16 3 8.8 8.8 3 16 3s13 5.8 13 13-5.8 13-13 13zm7.2-8.2c-.4-.2-2.3-1.1-2.6-1.2-.3-.1-.6-.2-.9.2-.3.4-1.1 1.2-1.3 1.4-.2.2-.5.3-.9.1-.4-.2-1.7-.6-3.2-1.9-1.2-1.1-2-2.4-2.2-2.8-.2-.4 0-.6.2-.8.2-.2.4-.5.6-.7.2-.2.3-.4.5-.7.2-.3.1-.6 0-.8-.1-.2-.9-2.2-1.2-3-.3-.8-.6-.7-.8-.7-.2 0-.4 0-.6 0-.2 0-.6.1-.9.4-.3.3-1.2 1.2-1.2 2.9s1.2 3.3 1.4 3.5c.2.2 2.4 3.7 5.9 5.1.8.3 1.4.5 1.9.6.8.3 1.5.2 2.1.1.6-.1 1.9-.8 2.2-1.6.3-.8.3-1.5.2-1.6-.1-.1-.4-.2-.8-.4z"/></svg>
        <span class="footer-label">WhatsApp</span>
      </a>
    </div>
    <div style="font-size: 1rem; margin-top: 0.5rem;">
      <span><a href="tel:+254712782311" style="color: #136810ff; text-decoration: underline;"></a></span>
      <span>Email: <a href="mailto:Michaelmuinde87@gmail.com" style="color: #f7f6f6ff; text-decoration: underline;">Michaelmuinde87@gmail.com</a></span>
    </div>
  </div>
  <style>
    @media (max-width: 600px) {
      #footer-icons {
        gap: 1rem !important;
      }
      .icon-svg {
        width: 22px !important;
        height: 22px !important;
      }
      .footer-label {
        display: none !important;
      }
    }
    @media (min-width: 601px) {
      .icon-svg {
        width: 28px !important;
        height: 28px !important;
      }
      .footer-label {
        display: inline-block !important;
        margin-left: 0.5em;
      }
    }
  </style>
  <script>
    // Extra JS for accessibility: focus/blur effect
    document.querySelectorAll('.footer-icon').forEach(icon => {
      icon.addEventListener('focus', () => icon.style.background = '#1a1f2b');
      icon.addEventListener('blur', () => icon.style.background = 'none');
    });
  </script>
</footer>
