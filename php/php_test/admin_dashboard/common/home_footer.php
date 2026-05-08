

<style>
  * { box-sizing: border-box; margin: 0; padding: 0; }
  .footer { background: #1a1a2e; color: #e0e0e0; font-family: 'Segoe UI', sans-serif; padding: 48px 40px 0; margin-top: 60px;}
  .footer-grid { display: grid; grid-template-columns: 2fr 1fr 1fr 1fr; gap: 40px; padding-bottom: 40px; border-bottom: 0.5px solid rgba(255,255,255,0.1); }
  .brand-name { font-size: 20px; font-weight: 700; color: #fff; margin-bottom: 12px; letter-spacing: 0.5px; }
  .brand-desc { font-size: 13px; color: #9090b0; line-height: 1.7; margin-bottom: 20px; }
  .social-links { display: flex; gap: 10px; }
  .social-btn { width: 36px; height: 36px; border-radius: 50%; border: 1px solid rgba(255,255,255,0.15); display: flex; align-items: center; justify-content: center; color: #9090b0; font-size: 16px; cursor: pointer; transition: all 0.2s; text-decoration: none; }
  .social-btn:hover { border-color: #4f8ef7; color: #4f8ef7; background: rgba(79,142,247,0.1); }
  .col-title { font-size: 13px; font-weight: 600; color: #fff; text-transform: uppercase; letter-spacing: 1.2px; margin-bottom: 18px; }
  .col-links { list-style: none; }
  .col-links li { margin-bottom: 10px; }
  .col-links a { font-size: 13px; color: #9090b0; text-decoration: none; transition: color 0.2s; }
  .col-links a:hover { color: #4f8ef7; }
  .newsletter-box { background: rgba(79,142,247,0.07); border: 0.5px solid rgba(79,142,247,0.25); border-radius: 10px; padding: 20px; margin-top: 8px; }
  .newsletter-box p { font-size: 12px; color: #9090b0; margin-bottom: 12px; line-height: 1.5; }
  .email-row { display: flex; gap: 8px; }
  .email-row input { flex: 1; background: rgba(255,255,255,0.07); border: 0.5px solid rgba(255,255,255,0.15); border-radius: 6px; padding: 8px 12px; font-size: 12px; color: #fff; outline: none; }
  .email-row input::placeholder { color: #5a5a7a; }
  .email-row button { background: #4f8ef7; border: none; border-radius: 6px; padding: 8px 14px; font-size: 12px; font-weight: 600; color: #fff; cursor: pointer; white-space: nowrap; }
  .footer-bottom { display: flex; align-items: center; justify-content: space-between; padding: 20px 0; flex-wrap: wrap; gap: 12px; }
  .copyright { font-size: 12px; color: #5a5a7a; }
  .payment-badges { display: flex; gap: 8px; align-items: center; }
  .badge { background: rgba(255,255,255,0.06); border: 0.5px solid rgba(255,255,255,0.1); border-radius: 5px; padding: 4px 10px; font-size: 11px; color: #9090b0; font-weight: 500; }
  .bottom-links { display: flex; gap: 20px; }
  .bottom-links a { font-size: 11px; color: #5a5a7a; text-decoration: none; }
  .bottom-links a:hover { color: #9090b0; }
  .divider { width: 1px; background: rgba(255,255,255,0.08); }
</style>

<footer class="footer">
  <div class="footer-grid">
    <div>
      <div class="brand-name">Madhuri - Jannat Store</div>
      <p class="brand-desc">আপনার পছন্দের পণ্য সহজেই খুঁজে পান। সেরা মানের পণ্য, সেরা দামে। আমরা আপনার সন্তুষ্টি নিশ্চিত করতে প্রতিশ্রুতিবদ্ধ।</p>
      <div class="social-links">
        <a class="social-btn" href="#" aria-label="Facebook"><i class="ti ti-brand-facebook" aria-hidden="true"></i></a>
        <a class="social-btn" href="#" aria-label="Instagram"><i class="ti ti-brand-instagram" aria-hidden="true"></i></a>
        <a class="social-btn" href="#" aria-label="Twitter"><i class="ti ti-brand-twitter" aria-hidden="true"></i></a>
        <a class="social-btn" href="#" aria-label="YouTube"><i class="ti ti-brand-youtube" aria-hidden="true"></i></a>
      </div>
    </div>

    <div>
      <p class="col-title">Quick Links</p>
      <ul class="col-links">
        <li><a href="#">হোম পেজ</a></li>
        <li><a href="#">সব পণ্য</a></li>
        <li><a href="#">নতুন আসা</a></li>
        <li><a href="#">অফার ও ডিল</a></li>
        <li><a href="#">আমাদের সম্পর্কে</a></li>
      </ul>
    </div>

    <div>
      <p class="col-title">Customer Care</p>
      <ul class="col-links">
        <li><a href="#">অর্ডার ট্র্যাক করুন</a></li>
        <li><a href="#">রিটার্ন পলিসি</a></li>
        <li><a href="#">শিপিং তথ্য</a></li>
        <li><a href="#">FAQ</a></li>
        <li><a href="#">যোগাযোগ করুন</a></li>
      </ul>
    </div>

    <div>
      <p class="col-title">Newsletter</p>
      <div class="newsletter-box">
        <p>নতুন পণ্য ও অফারের আপডেট পেতে সাবস্ক্রাইব করুন।</p>
        <div class="email-row">
          <input type="email" placeholder="আপনার ইমেইল..." />
          <button>যোগ দিন</button>
        </div>
      </div>
      <ul class="col-links" style="margin-top:18px">
        <li><a href="#"><i class="ti ti-phone" style="font-size:13px;margin-right:6px;vertical-align:-1px" aria-hidden="true"></i>01700-000000</a></li>
        <li><a href="#"><i class="ti ti-mail" style="font-size:13px;margin-right:6px;vertical-align:-1px" aria-hidden="true"></i>info@madhuristore.com</a></li>
        <li><a href="#"><i class="ti ti-map-pin" style="font-size:13px;margin-right:6px;vertical-align:-1px" aria-hidden="true"></i>ঢাকা, বাংলাদেশ</a></li>
      </ul>
    </div>
  </div>

  <div class="footer-bottom">
    <p class="copyright">© 2025 Madhuri - Jannat Store. সমস্ত অধিকার সংরক্ষিত।</p>
    <div class="payment-badges">
      <span class="badge">bKash</span>
      <span class="badge">Nagad</span>
      <span class="badge">Visa</span>
      <span class="badge">MasterCard</span>
      <span class="badge">COD</span>
    </div>
    <div class="bottom-links">
      <a href="#">Privacy Policy</a>
      <a href="#">Terms of Service</a>
    </div>
  </div>
</footer>
