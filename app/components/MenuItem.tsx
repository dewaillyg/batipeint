import Link from "next/link";

type MenuItemsProps = {
    value: string,
    itemLevel: number
}

const MenuItem = ({ value, itemLevel }: MenuItemsProps) => {
    
    const thisLevel = itemLevel;
    
    let parentStyle = '';
    let childStyle = ''

    if (thisLevel === 1) {
        parentStyle = 'flex items-center bg-highlightVariant w-fit my-px'
        childStyle = 'text-4xl text-highlight pr-4'
    } else {
        parentStyle = 'flex items-center bg-highlightVariantTwo w-fit my-px'
        childStyle = 'text-l text-highlight pr-2'
    }

    return (
        <div className={parentStyle}>
            <Link className={childStyle} href={`${value === 'Accueil' ? '/' : (value === 'Réalisations' ? 'realisations' : value.toLowerCase())}`}>{value}</Link>
        </div>
    )
}

export default MenuItem;