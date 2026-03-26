<?php get_header(); ?>

<!-- ============================================================
     HERO
============================================================ -->
<section id="hero">
  <div class="hero-grid-bg" aria-hidden="true"></div>
  <div class="container">
    <div class="hero-content">

      <p class="hero-eyebrow">Available for new opportunities</p>

      <h1 class="hero-title">
        Web <em>Developer</em>
      </h1>

      <p class="hero-subtitle">
        I'm Edwin Nord — I build clean, performant web experiences using
        HTML, CSS, JavaScript, React, and WordPress. Currently based in Canada,
        open to remote and on-site roles.
      </p>

      <div class="hero-actions">
        <a href="#projects" class="btn-primary">
          View Projects
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M5 12h14M12 5l7 7-7 7" />
          </svg>
        </a>
        <a href="https://drive.google.com/file/d/1LMGYyBnVycRBhYxxtFCw7VOMgTF-Q63M/view?usp=sharing"
          target="_blank" rel="noopener" class="btn-outline">
          <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
            <polyline points="7 10 12 15 17 10" />
            <line x1="12" y1="15" x2="12" y2="3" />
          </svg>
          My Resume
        </a>
      </div>

    </div>
  </div>

  <div class="hero-scroll" aria-hidden="true">
    <span class="scroll-line"></span>
    <span>Scroll</span>
  </div>
</section>


<!-- ============================================================
     ABOUT
============================================================ -->
<section id="about">
  <div class="container">
    <div class="about-inner">

      <div class="about-text reveal">
        <span class="section-label">About</span>
        <h2 class="section-title">Turning ideas<br>into interfaces</h2>
        <p>
          I'm a front-end web developer with a strong eye for design and a focus on
          writing maintainable, efficient code. I thrive in collaborative environments
          and love working through challenging UI problems.
        </p>
        <p>
          With experience across agency and freelance settings, I've shipped
          dealership websites, React applications, and custom WordPress themes —
          always with an emphasis on performance and user experience.
        </p>
        <div style="margin-top: 1.5rem;">
          <a href="#contact" class="btn-outline" style="display: inline-flex;">Get in touch &rarr;</a>
        </div>
      </div>

      <div class="about-stats reveal" style="transition-delay: 0.15s">
        <div class="stat-card">
          <div class="stat-number">3<span>+</span></div>
          <div class="stat-label">Years Experience</div>
        </div>
        <div class="stat-card">
          <div class="stat-number">10<span>+</span></div>
          <div class="stat-label">Projects Delivered</div>
        </div>
        <div class="stat-card">
          <div class="stat-number">5<span>+</span></div>
          <div class="stat-label">Technologies</div>
        </div>
        <div class="stat-card">
          <div class="stat-number">∞</div>
          <div class="stat-label">Drive to Learn</div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ============================================================
     SERVICES
============================================================ -->
<section id="services">
  <div class="container">
    <div class="services-header reveal">
      <span class="section-label">What I Do</span>
      <h2 class="section-title">Services I offer</h2>
    </div>

    <div class="services-grid reveal" style="transition-delay: 0.1s">

      <div class="service-card">
        <div class="service-icon"><i class="fas fa-code"></i></div>
        <h3>Web Development</h3>
        <p>Full front-end builds from concept to deployment. Semantic HTML, modern CSS,
          and JavaScript-powered interactions that are fast and accessible.</p>
      </div>

      <div class="service-card">
        <div class="service-icon"><i class="fa-brands fa-wordpress"></i></div>
        <h3>WordPress Themes</h3>
        <p>Custom WordPress theme development tailored to your brand — built for
          content editors, optimised for SEO, and easy to maintain long-term.</p>
      </div>

      <div class="service-card">
        <div class="service-icon"><i class="fas fa-layer-group"></i></div>
        <h3>Landing Pages</h3>
        <p>High-converting, mobile-first landing pages built to drive results.
          Clean design, clear messaging, and attention to every detail.</p>
      </div>

    </div>
  </div>
</section>


<!-- ============================================================
     SKILLS
============================================================ -->
<section id="skills">
  <div class="container">
    <div class="skills-layout">

      <div class="reveal">
        <span class="section-label">Expertise</span>
        <h2 class="section-title">My skill set</h2>
        <p class="skills-description">
          A curated stack built for modern front-end work —
          from vanilla HTML &amp; CSS through to React,
          PHP, and the tools teams use every day.
        </p>
      </div>

      <div class="skills-columns reveal" style="transition-delay: 0.15s">

        <div class="skills-group">
          <h4><i class="fas fa-code"></i> &nbsp;Technical</h4>
          <?php
          $tech_skills = [
            'HTML5',
            'CSS / SCSS',
            'JavaScript / jQuery',
            'React',
            'PHP',
            'WordPress',
            'Bootstrap 5',
            'REST API',
            'Node.js',
            'Git / GitHub',
          ];
          foreach ($tech_skills as $skill) {
            echo '<div class="skill-item"><span class="skill-dot"></span>' . esc_html($skill) . '</div>';
          }
          ?>
        </div>

        <div class="skills-group">
          <h4><i class="fas fa-laptop-code"></i> &nbsp;Tools</h4>
          <?php
          $tool_skills = [
            'VS Code',
            'Figma',
            'Docker',
            'Jira',
            'Bitbucket',
            'Salesforce',
            'npm / Yarn',
            'Slack',
            'GitHub',
            'Agile / Scrum',
          ];
          foreach ($tool_skills as $skill) {
            echo '<div class="skill-item"><span class="skill-dot"></span>' . esc_html($skill) . '</div>';
          }
          ?>
        </div>

      </div>
    </div>
  </div>
</section>


<!-- ============================================================
     PROJECTS
============================================================ -->
<section id="projects">
  <div class="container">

    <div class="projects-header">
      <div class="reveal">
        <span class="section-label">Work</span>
        <h2 class="section-title" style="margin-bottom: 0">Latest Projects</h2>
      </div>
      <a href="https://github.com/enorddev" target="_blank" rel="noopener"
        class="btn-outline reveal" style="transition-delay: 0.1s; white-space: nowrap;">
        View GitHub &rarr;
      </a>
    </div>

    <?php
    $projects_query = new WP_Query([
      'post_type'      => 'en_project',
      'posts_per_page' => 6,
      'meta_query'     => [
        [
          'key'     => '_en_project_featured',
          'value'   => '1',
          'compare' => '=',
        ],
      ],
      'orderby' => 'menu_order',
      'order'   => 'ASC',
    ]);

    // Fallback static projects if CPT has no entries yet
    $static_projects = [
      [
        'title' => 'Grant Miller Dealership Website',
        'tag'   => 'Web Development',
        'desc'  => 'Full dealership website with inventory listings, lead capture, and responsive design.',
        'url'   => 'https://www.grantmillermotors.com/',
        'img'   => '',
      ],
      [
        'title' => 'Stouffville Nissan Website',
        'tag'   => 'Web Development',
        'desc'  => 'Dealership web presence with custom design, SEO-optimised structure, and mobile-first layout.',
        'url'   => 'https://www.stouffvillenissan.com/',
        'img'   => '',
      ],
      [
        'title' => 'Subaru of Muskoka',
        'tag'   => 'Web Development',
        'desc'  => 'Brand-aligned dealership site featuring dynamic inventory and strong visual identity.',
        'url'   => 'https://www.subaruofmuskoka.ca/',
        'img'   => '',
      ],
      [
        'title' => 'E-Commerce Product Page',
        'tag'   => 'React',
        'desc'  => 'Interactive shoe product page built with React — featuring a cart, size selector, and smooth transitions.',
        'url'   => 'https://shoe-product-app-react.netlify.app/',
        'img'   => '',
      ],
      [
        'title' => 'Greguy Jules Realtor',
        'tag'   => 'Custom WordPress Theme',
        'desc'  => 'Custom WordPress theme for a real estate agent — built from scratch with a clean listing layout.',
        'url'   => 'https://greguy-jules-realtor.netlify.app/',
        'img'   => '',
      ],
      [
        'title' => 'Memory Game — React',
        'tag'   => 'React',
        'desc'  => 'Browser-based memory card game built in React with smooth flip animations and score tracking.',
        'url'   => 'https://react-memory-game-app.netlify.app/',
        'img'   => '',
      ],
    ];

    $arrow_svg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M5 12h14M12 5l7 7-7 7"/></svg>';
    ?>

    <div class="projects-grid">

      <?php if ($projects_query->have_posts()) : ?>
        <?php while ($projects_query->have_posts()) : $projects_query->the_post(); ?>
          <?php
          $url = get_post_meta(get_the_ID(), '_en_project_url', true);
          $tag = get_post_meta(get_the_ID(), '_en_project_tag', true);
          ?>
          <article class="project-card reveal">
            <div class="project-thumb">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('large'); ?>
              <?php else : ?>
                <div class="project-thumb-placeholder"><?php echo esc_html($tag ?: 'Project'); ?></div>
              <?php endif; ?>
            </div>
            <div class="project-info">
              <?php if ($tag) echo '<span class="project-tag">' . esc_html($tag) . '</span>'; ?>
              <h3><?php the_title(); ?></h3>
              <p><?php echo wp_trim_words(get_the_excerpt(), 18); ?></p>
              <?php if ($url) : ?>
                <a href="<?php echo esc_url($url); ?>" target="_blank" rel="noopener" class="project-link">
                  View Live <?php echo $arrow_svg; ?>
                </a>
              <?php endif; ?>
            </div>
          </article>
        <?php endwhile;
        wp_reset_postdata(); ?>

      <?php else : ?>
        <?php foreach ($static_projects as $i => $p) : ?>
          <article class="project-card reveal" style="transition-delay: <?php echo $i * 0.07; ?>s">
            <div class="project-thumb">
              <div class="project-thumb-placeholder"><?php echo esc_html($p['tag']); ?></div>
            </div>
            <div class="project-info">
              <span class="project-tag"><?php echo esc_html($p['tag']); ?></span>
              <h3><?php echo esc_html($p['title']); ?></h3>
              <p><?php echo esc_html($p['desc']); ?></p>
              <a href="<?php echo esc_url($p['url']); ?>" target="_blank" rel="noopener" class="project-link">
                View Live <?php echo $arrow_svg; ?>
              </a>
            </div>
          </article>
        <?php endforeach; ?>
      <?php endif; ?>

    </div>
  </div>
</section>


<!-- ============================================================
     CONTACT
============================================================ -->
<section id="contact">
  <div class="container">
    <div class="contact-grid">

      <div class="reveal">
        <span class="section-label">Contact</span>
        <h2 class="section-title">Let's work<br>together</h2>
        <p>
          Whether you have a project in mind, a role you think I'd be a great fit for,
          or just want to connect — my inbox is always open.
        </p>

        <div class="contact-socials">
          <a href="https://www.linkedin.com/in/edwin-nord/" target="_blank" rel="noopener" class="contact-social-link">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
              <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
              <rect x="2" y="9" width="4" height="12" />
              <circle cx="4" cy="4" r="2" />
            </svg>
            linkedin.com/in/edwin-nord
          </a>
          <a href="https://github.com/enorddev" target="_blank" rel="noopener" class="contact-social-link">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
              <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54
                6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0
                0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0
                5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22" />
            </svg>
            github.com/enorddev
          </a>
        </div>
      </div>

      <div class="contact-form-wrap reveal" style="transition-delay: 0.15s">
        <form id="contact-form" novalidate>
          <?php wp_nonce_field('en_contact_nonce', 'en_contact_nonce_field'); ?>
          <div class="form-row">
            <div class="form-group">
              <label for="cf-name">Name</label>
              <input type="text" id="cf-name" name="name" placeholder="Your name" required>
            </div>
            <div class="form-group">
              <label for="cf-email">Email</label>
              <input type="email" id="cf-email" name="email" placeholder="your@email.com" required>
            </div>
          </div>
          <div class="form-group">
            <label for="cf-subject">Subject</label>
            <input type="text" id="cf-subject" name="subject" placeholder="What's this about?">
          </div>
          <div class="form-group">
            <label for="cf-message">Message</label>
            <textarea id="cf-message" name="message" placeholder="Tell me about your project or opportunity…" required></textarea>
          </div>
          <button type="submit" class="form-submit" id="form-submit">
            <span id="submit-text">Send Message</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <line x1="22" y1="2" x2="11" y2="13" />
              <polygon points="22 2 15 22 11 13 2 9 22 2" />
            </svg>
          </button>
          <div class="form-success" id="form-success">
            ✓ &nbsp;Thank you! Your message has been sent.
          </div>
        </form>
      </div>

    </div>
  </div>
</section>

<?php get_footer(); ?>