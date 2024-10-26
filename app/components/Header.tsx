"use client";

import { useEffect, useState } from "react";
import HeaderButton from "./HeaderButton";
import MenuItem from "./MenuItem";

export default function Header() {
    const [isVisible, setIsVisible] = useState(false);
    const [isScroll, setIsScroll] = useState(false);
    const [lastIsScroll, setLastIsScroll] = useState(0);

    const toggleVisibility = () => {
        setIsVisible(prev => !prev);
    };

    useEffect(() => {
        const handleScroll = () => {
            const currentScrollY = window.scrollY;

            if (currentScrollY > lastIsScroll && currentScrollY > 100) {
                setIsScroll(true);
            } else {
                setIsScroll(false);
            }

            setLastIsScroll(currentScrollY);
        }

        window.addEventListener('scroll', handleScroll);

        return () => {
            window.removeEventListener('scroll', handleScroll);
        }
    }, [lastIsScroll])


    return (
        <header className={`${isScroll ? '-top-24' : 'top-0'} sticky duration-500 transition-all`}>
            <div className="text-center mb-4 px-4 bg-highlight text-stack text-sm">
                APPELEZ-NOUS POUR UN DEVIS :  07 70 29 84 03
            </div>
            <div className="flex justify-between px-4">
                <div>
                    <img className="max-h-14" src="https://picsum.photos/200/200" alt="" />
                </div>
                <div className="z-10 flex items-center justify-end relative">
                    <HeaderButton onClick={toggleVisibility} />
                </div>
            </div>
            <div
                className={`rounded-md transition-all duration-500 ${isVisible ? 'delay-0' : 'delay-500'} ease overflow-hidden bg-highlight absolute top-[7rem] right-8
                ${isVisible ? 'h-full w-2/3' : 'h-0 w-0'}`}
            >
                <div className={`rounded-md absolute transition-all duration-500 top-0 right-0 h-full ${isVisible ? 'w-0 delay-500' : 'w-full delay-0'} bg-highlightVariant`}></div>
                <div className="pb-4 pt-4 text-justify">
                    <MenuItem itemLevel={1} value='Accueil' />
                </div>
            </div>
        </header>
    );
}