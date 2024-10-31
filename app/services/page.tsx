'use client'

import { useState, useEffect } from "react";
import Header from "../components/Header";
import ServiceGrid from "../components/ServiceGrid";
import { services } from "../data/servicesData";
import './services.css';
import Footer from "../components/Footer";

export default function Services() {
  const servicesPerPage = 2;
  const [currentIndex, setCurrentIndex] = useState(0);
  const [isAnimating, setIsAnimating] = useState(false);


  const handleNext = () => {
    if (currentIndex + servicesPerPage < services.length) {
      setIsAnimating(true);
      setCurrentIndex(currentIndex + servicesPerPage);
    }
  }
  const handlePrev = () => {
    if (currentIndex - servicesPerPage >= 0) {
      setIsAnimating(true);
      setCurrentIndex(currentIndex - servicesPerPage);
    }
  }

  useEffect(() => {
    const timeout = setTimeout(() => {
      setIsAnimating(false);
    }, 500); // Durée de l'animation CSS
    return () => clearTimeout(timeout);
  }, [currentIndex]);


  return (
    <div className="">
      <Header />
      <div className="bg-highlightOpacity mt-4 p-4">
        <h1 className="text-center italic text-xl font-bold font-fontHighlight">Découvrez</h1>
        <div className="text-center text-5xl">
          <p className="font-light inline-block">Nos <span className="z-20 relative after:absolute after:bottom-1 after:h-3 after:w-full after:bg-highlight after:left-0 after:-z-10">services</span> de peinture</p>
        </div>
      </div>
      <section className="grid grid-cols-2 p-4 gap-3 mt-10">
        {services.slice(currentIndex, currentIndex + servicesPerPage).map((service) => (
          <div
            key={service.link}
            className={`service-animation-${isAnimating ? 'enter' : 'exit'} ${isAnimating ? 'service-animation-enter-active' : 'service-animation-exit-active'}`}
          >
            <ServiceGrid title={service.title} subtitle={service.subtitle} link={service.link} />
          </div>))}
        <div className="flex justify-evenly col-span-2">
          <button
            onClick={handlePrev}
            disabled={currentIndex === 0}
            aria-label="Previous services"
            className={`w-40 text-stack h-fit py-3 px-6 rounded-md ${currentIndex === 0 ? 'bg-highlightOpacity' : 'bg-highlightVariant'}`}
          >
            Précédent
          </button>
          <button
            onClick={handleNext}
            disabled={currentIndex + servicesPerPage >= services.length}
            aria-label="Next services"
            className={`w-40 text-stack h-fit py-3 px-6 rounded-md ${currentIndex + servicesPerPage >= services.length ? 'bg-highlightOpacity' : 'bg-highlightVariant'}`}
          >
            Suivant
          </button>
        </div>
      </section>
      <Footer />
    </div>
  );
}