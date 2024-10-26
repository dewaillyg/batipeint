"use client";
import { useState } from "react";

interface HeaderButtonProps {
    onClick: () => void
}

const HeaderButton = ({ onClick }: HeaderButtonProps) => {

    const [isMargin, setIsMargin] = useState('my-1');
    const [isRotate, setIsRotate] = useState('rotate-0');
    const [isRotateTwo, setIsRotateTwo] = useState('rotate-0');
    const [isClick, setIsClick] = useState(false);

    const handleButton = () => {

        setIsClick((prev) => prev = !prev);

        if (!isClick) {
            setIsMargin((prev) => prev === 'my-1' ? '-my-[1px]' : 'my-1');

            setTimeout(() => {
                setIsRotate((prev) => prev === 'rotate-0' ? 'rotate-45' : 'rotate-0');
                setIsRotateTwo((prev) => prev === 'rotate-0' ? '-rotate-45' : 'rotate-0');
            }, 300);
        } else {
            setTimeout(() => {
                setIsMargin((prev) => prev === 'my-1' ? '-my-[1px]' : 'my-1');
            }, 300)
            setIsRotate((prev) => prev === 'rotate-0' ? 'rotate-45' : 'rotate-0');
            setIsRotateTwo((prev) => prev === 'rotate-0' ? '-rotate-45' : 'rotate-0');
        }

        onClick();
    };

    return (
        <div className="h-14 w-28 flex group">
            <div className="h-full w-1/2 flex flex-wrap">
                <div className={`h-1/2 w-1/2 flex items-center justify-center bg-stack text-highlight`}>M</div>
                <div className={`transition-all duration-400 h-1/2 w-1/2 flex items-center justify-center group-hover:bg-highlightVariant ${isClick ? 'bg-highlightVariant' : 'bg-highlight'} text-stack`}>E</div>
                <div className={`transition-all duration-400 h-1/2 w-1/2 flex items-center justify-center group-hover:bg-highlightVariant ${isClick ? 'bg-highlightVariant' : 'bg-highlight'} text-stack`}>N</div>
                <div className={`h-1/2 w-1/2 flex items-center justify-center bg-stack text-highlight`}>U</div>
            </div>
            <div onClick={handleButton} className={`group-hover:bg-highlightVariant transition-all duration-400 w-1/2 h-full ${ isClick ? 'bg-highlightVariant' : 'bg-highlight'} flex justify-center items-center flex-col cursor-pointer`}>
                <div className={`${isRotate} transition-all duration-300 ease-in-out btn-bar h-[2px] w-3/4 bg-stack ${isMargin}`}></div>
                <div className={`${isRotateTwo} transition-all duration-300 ease-in-out btn-bar h-[2px] w-3/4 bg-stack ${isMargin}`}></div>
            </div>
        </div>
    );
};

export default HeaderButton;
