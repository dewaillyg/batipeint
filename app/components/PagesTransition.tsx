// app/components/PagesTransition.tsx
'use client';

import { ReactNode } from 'react';
import { motion, AnimatePresence } from 'framer-motion';
import { usePathname } from 'next/navigation';

const layoutVariants = {
  initial: { opacity: 0, x: '-100%' }, // Commence à gauche
  in: { opacity: 1, x: '0%' },          // État d'arrivée
  out: { opacity: 0, x: '100%' },       // Sort vers la droite
};

const PagesTransition = ({ children }: { children: ReactNode }) => {
  const pathname = usePathname(); // Obtenir le chemin actuel

  return (
    <AnimatePresence>
      <motion.div
        key={pathname} // Utiliser le chemin comme clé
        initial="initial"
        animate="in"
        exit="out"
        variants={layoutVariants}
        transition={{ duration: 0.5, ease: "easeInOut" }} // Transition fluide
      >
        {children}
      </motion.div>
    </AnimatePresence>
  );
};

export default PagesTransition;
