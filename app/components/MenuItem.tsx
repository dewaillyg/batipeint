type MenuItemsProps = {
    value: string,
    itemLevel: number
}

const MenuItem = ({ value, itemLevel }: MenuItemsProps) => {
    const thisLevel = itemLevel;
    let parentStyle = '';
    let childStyle = ''

    switch (thisLevel) {
        case 1:
            parentStyle = 'flex items-center bg-highlightVariant w-fit'
            childStyle = 'text-4xl text-highlight pr-4'
            break;
    }

    return (
        <div className={parentStyle}>
            <p className={childStyle}>{value}</p>
        </div>
    )
}

export default MenuItem;