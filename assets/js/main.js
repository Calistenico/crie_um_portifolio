// assets/js/main.js

// Módulo de inicialização do navbar
function initNavbar() {
  const navbar = document.querySelector('.navbar');
  const scrollPosition = window.scrollY;

  // Blur da navbar no scroll
  navbar.style.filter = `blur(${scrollPosition * 0.1}px)`;

  // Hamburger toggle
  const hamburger = document.querySelector('.hamburger');
  hamburger.addEventListener('click', () => {
    const menu = document.querySelector('.menu');
    menu.classList.toggle('open');
  });
}

// Módulo de inicialização do scroll reveal
function initScrollReveal() {
  const reveals = document.querySelectorAll('.reveal');

  // Configuração do IntersectionObserver
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  }, { threshold: 1.0 });

  // Adiciona o evento de observação aos elementos
  reveals.forEach((reveal) => observer.observe(reveal));
}

// Módulo de inicialização dos contadores
function initCounters() {
  const counters = document.querySelectorAll('.counter');

  // Detecção de elementos com data-target="2847"
  const targets = document.querySelectorAll('[data-target="2847"]');

  targets.forEach((target) => {
    const value = parseInt(target.dataset.target);
    const easing = 'cubic-bezier(0.455, 0.03, 0.515, 0.955)';
    const animationDuration = 1000;

    // Animação com easing
    target.addEventListener('load', () => {
      counterAnimation(value, easing, animationDuration);
    });
  });

  function counterAnimation(value, easing, duration) {
    let currentValue = 0;
    const intervalId = setInterval(() => {
      currentValue += (value - currentValue) / duration * 16;
      target.style.transform = `translateX(${currentValue}px)`;
      if (Math.abs(currentValue - value) < 1) clearInterval(intervalId);
    }, 16);
  }
}

// Módulo de inicialização do accordion
function initFAQ() {
  const faqItems = document.querySelectorAll('.faq-item');

  // Evento de clique no botão de abertura
  faqItems.forEach((item) => {
    item.querySelector('.button').addEventListener('click', () => {
      const content = item.querySelector('.content');
      if (content.style.maxHeight === '0px') {
        content.style.maxHeight = `${content.scrollHeight}px`;
        item.classList.remove('open');
      } else {
        content.style.maxHeight = '0px';
        item.classList.add('open');
      }
    });
  });
}

// Módulo de inicialização do scroll suave
function initSmoothScroll() {
  const links = document.querySelectorAll('a[href^="#"]');

  // Evento de clique no link
  links.forEach((link) => {
    link.addEventListener('click', (e) => {
      e.preventDefault();
      const href = link.getAttribute('href');
      const target = document.querySelector(href);
      if (target) {
        smoothScroll(target.offsetTop, 500);
      }
    });
  });

  function smoothScroll(to, duration) {
    const start = window.scrollY;
    const end = to;
    const easing = 'cubic-bezier(0.455, 0.03, 0.515, 0.955)';
    const intervalId = setInterval(() => {
      const progress = (window.scrollY - start) / (end - start);
      window.scrollBy(0, progress * (end - start));
      if (Math.abs(window.scrollY - end) < 1) clearInterval(intervalId);
    }, 16);
  }
}

// Módulo de inicialização do WhatsApp flutuante
function initWhatsApp() {
  const whatsapp = document.querySelector('.whatsapp');
  const message = 'Contato: (11) 98765-4321';

  // Evento de clique no botão WhatsApp
  whatsapp.addEventListener('click', () => {
    window.open(`https://wa.me/${message}`, '_blank');
  });
}

// Módulo de inicialização dos tabs
function initTabs() {
  const tabs = document.querySelectorAll('.tab');

  // Evento de clique no tab
  tabs.forEach((tab) => {
    tab.addEventListener('click', () => {
      const content = tab.querySelector('.content');
      if (content.style.display === 'none') {
        content.style.display = 'block';
      } else {
        content.style.display = 'none';
      }
    });
  });
}

// Módulo de inicialização do slider
function initSlider() {
  // Não implementado
}

// Módulo de inicialização da validação de formulário
function initFormValidation() {
  const forms = document.querySelectorAll('form');

  // Evento de submit do formulário
  forms.forEach((form) => {
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const name = form.querySelector('#name').value;
      const email = form.querySelector('#email').value;

      if (!name || !email) {
        alert('Preencha todos os campos');
        return;
      }

      // Envio do formulário
      fetch('/enviar', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ name, email }),
      })
        .then((response) => response.json())
        .then((data) => console.log(data))
        .catch((error) => console.error(error));
    });
  });

  // Evento de erro do formulário
  forms.forEach((form) => {
    form.addEventListener('invalid', (e) => {
      e.preventDefault();
      const name = form.querySelector('#name').value;
      const email = form.querySelector('#email').value;

      if (!name || !email) {
        alert('Preencha todos os campos');
        return;
      }

      // Erro do formulário
      alert('Erro ao enviar o formulário');
    });
  });
}

// Evento de carregamento da página
document.addEventListener('DOMContentLoaded', () => {
  try {
    initNavbar();
    initScrollReveal();
    initCounters();
    initFAQ();
    initSmoothScroll();
    initWhatsApp();
    // initTabs();
    // initSlider();
    initFormValidation();
  } catch (error) {
    console.error(error);
  }
});